<?php

declare(strict_types=1);

use Database\MyPdo;
use Entity\Collection\ArtistCollection;
use Html\WebPage;

require_once '../vendor/autoload.php';
$webPage = new WebPage();
$artistCol = new ArtistCollection();
$webPage->setTitle("liste artist");
$stmt = $artistCol->findAll();

foreach ($stmt as $artist) {
    $webPage->appendContent("<a href='artist.php?artistId={$webPage->escapeString(strval($artist->getId()))}'>{$webPage->escapeString($artist->getName())}</a><br/>\n");
}

echo $webPage->toHTML();
