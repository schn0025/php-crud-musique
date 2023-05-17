<?php

declare(strict_types=1);

namespace Entity;

class Artist
{
    private int $id;
    private string $name;
    /** getId renvoi l'id de l'artist
     * @return int L'id de l'artist
     */
    public function getId(): int
    {
        return $this->id;
    }
    /** getName renvoi le nom de l'artist
     * @return string nom de l'artist
     */
    public function getName(): string
    {
        return $this->name;
    }
}
