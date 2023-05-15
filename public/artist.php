<?php

declare(strict_types=1);

use Database\MyPdo;
use Html\WebPage;

$artistId = 17;

$webPage = new WebPage();

$stmt = MyPDO::getInstance()->prepare(
    <<<'SQL'
    SELECT name , id
    FROM artist
    WHERE id = :artistId
SQL
);
$stmt->bindValue(':artistId', "$artistId");
$stmt->execute();
$ligne = $stmt->fetch();
$name = $ligne['name'];
$webPage->setTitle("Albums de $name ");

$albums = MyPDO::getInstance()->prepare(
    <<<'SQL'
    SELECT year, name
    FROM album
    WHERE artistId = 17
    ORDER BY 1 desc
SQL
);
$albums->execute();
while(($album = $albums->fetch()) !== false) {
    $webPage->appendContent("<p>{$webPage->escapeString(" {$album['year']} {$album['name']}")}</p>");
}

echo $webPage->toHTML();
