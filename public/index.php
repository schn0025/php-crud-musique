<?php

declare(strict_types=1);

use Database\MyPdo;
use Html\WebPage;

require_once '../vendor/autoload.php';
$webPage = new WebPage();

$webPage->setTitle("liste artist");

$stmt = MyPDO::getInstance()->prepare(
    <<<'SQL'
    SELECT id, name
    FROM artist
    ORDER BY name
SQL
);

$stmt->execute();

while (($ligne = $stmt->fetch()) !== false) {
    $webPage->appendContent("<p>{$webPage->escapeString("{$ligne['name']}")}</p>\n");
}
echo $webPage->toHTML();
