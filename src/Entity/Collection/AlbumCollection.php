<?php

declare(strict_types=1);

namespace Entity\Collection;

use Database\MyPdo;
use Entity\Album;
use PDO;

class AlbumCollection
{
    /** findByArtistId renvoi les album en fonction de l'id de l'artist passer en paramètre
    * @param int $artistId id de l'artist pour lequel on veut les albums
    * @return Album[] liste d'album
    */
    public static function findByArtistId(int $artistId): array
    {
        $cmd = MyPDO::getInstance()->prepare(
            <<<'SQL'
    SELECT year, name
    FROM album
    WHERE artistId = ?
    ORDER BY 1 desc
    SQL
        );
        $cmd->execute([$artistId]);
        return $cmd->fetchAll(PDO::FETCH_CLASS, Album::class);
    }
}
