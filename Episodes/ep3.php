<?php

class Playlist
{
    /**
     * @param Song[] $songs
     */
    public function __construct(public $name, public array $songs)
    {

    }
}
class Song
{
    public function __construct(public string $name, public string $artist)
    {

    }
}

$songs = [
    new Song ('My heart will go on', 'Celine Dion'),
    new Song ('Palladio', 'Jenkins')
];

$playlist = new Playlist('90s Movie Soundtracks', $songs);

foreach ($playlist->songs as $song) {
    var_dump($playlist->songs[0]->name);
}