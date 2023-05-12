<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

MyPDO::setConfiguration('mysql:host=mysql;dbname=cutron01_music;charset=utf8', 'web', 'web');
$html = <<<HTML
<!DOCTYPE html>
<title>liste artist</title>
<html>
HTML;

$stmt = MyPDO::getInstance()->prepare(
    <<<'SQL'
    SELECT id, name
    FROM artist
    ORDER BY name
SQL
);

$stmt->execute();

while (($ligne = $stmt->fetch()) !== false) {
    $html .= "<p>{$ligne['name']}\n";
}
