<?php

declare(strict_types=1);

use Database\MyPdo;
use Html\WebPage;

require_once '../vendor/autoload.php';
$webPage = new WebPage();

$webPage->setTitle("liste artist");

$stmt = MyPDO::getInstance()->prepare(
    <<<'SQL'
    SELECT name, id
    FROM artist
    ORDER BY name
SQL
);

$stmt->execute();

while (($ligne = $stmt->fetch()) !== false) {
    $webPage->appendContent("<a href='artist.php?artistId={$webPage->escapeString(strval($ligne['id']))}'>{$webPage->escapeString($ligne['name'])}</a><br/>\n");


}
echo $webPage->toHTML();
