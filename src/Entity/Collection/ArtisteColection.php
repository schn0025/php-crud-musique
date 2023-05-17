<?php

declare(strict_types=1);

namespace Entity\Collection;

use Database\MyPdo;
use Entity\Artist;
use PDO;

class ArtisteColection
{
    /**
     * finndAll renvoi un tableau de tout les artiste sans filtre
    * @return Artist[] liste des artistes
     */
    public static function findAll(): array
    {
        $cmd = MyPDO::getInstance()->prepare(<<<'SQL'
        SELECT name, id
        FROM artist
        ORDER BY name
        SQL);
        $cmd->execute();
        return $cmd->fetchAll(PDO::FETCH_CLASS);
    }
}
