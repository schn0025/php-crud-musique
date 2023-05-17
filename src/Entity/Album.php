<?php

declare(strict_types=1);

namespace Entity;

class Album
{
    private int $id;
    private string $name;
    private int $year;
    private int $artistId;
    private int $genreId;
    private int $coverId;

    /** getId donne l'Id de l'album
     * @return int Id de l'album
     */
    public function getId(): int
    {
        return $this->id;
    }
    /** getName donne le nom de l'album
     * @return string nom de l'album
     */
    public function getName(): string
    {
        return $this->name;
    }
    /** getYear donne l'année de parution de l'album
     * @return int année de parution de l'album
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /** getArtistId donne l'Id de l'artist ayant fait l'album
     * @return int Id de l'artist ayant fait l'album
     */
    public function getArtistId(): int
    {
        return $this->artistId;
    }/** getGenreId donne l'id du genre de l'album
     * @return int id du genre de l'album
     */
    public function getGenreId(): int
    {
        return $this->genreId;
    }
    /** getCoverId donne l'id de la couverture
     * @return int id de la couverture
     */
    public function getCoverId(): int
    {
        return $this->coverId;
    }
}
