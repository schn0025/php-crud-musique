<?php

declare(strict_types=1);

namespace Entity\Collection;

use Database\MyPdo;

class ArtisteColection
{
    public function findAll(): array
    {
        $cmd = MyPDO::getInstance()->prepare(<<<'SQL'
        SELECT name, id
        FROM artist
        ORDER BY name
        SQL);
        $cmd->execute();
        return $cmd->fetchAll();
    }
}