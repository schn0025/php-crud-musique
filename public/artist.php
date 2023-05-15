<?php

declare(strict_types=1);

use Database\MyPdo;
use Html\WebPage;

$webPage = new WebPage();
if(isset($_GET['artistId']) and !empty($_GET['artistId']) and  is_numeric($_GET['artistId'])) {
    $artistId = $_GET['artistId'];
} else {
    http_response_code(404);
    exit();
}

$stmt = MyPDO::getInstance()->prepare(
    <<<'SQL'
    SELECT name , id
    FROM artist
    WHERE id = :artistId
SQL
);
$stmt->bindValue(':artistId', "$artistId");
$stmt->execute();

if(($ligne = $stmt->fetch()) === false) {
    http_response_code(404);
    exit();
}

$name = $ligne['name'];

$webPage->setTitle("Albums de $name ");

$albums = MyPDO::getInstance()->prepare(
    <<<'SQL'
    SELECT year, name
    FROM album
    WHERE artistId = ?
    ORDER BY 1 desc
SQL
);
$albums->execute([$artistId]);
while(($album = $albums->fetch()) !== false) {
    $webPage->appendContent("<p>" . $webPage->escapeString(" {$album['year']} {$album['name']}") . "</p>");
}

echo $webPage->toHTML();
