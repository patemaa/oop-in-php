<?php

class Playlist
{
    //public $name;
    //public $songs;
    public function __construct(public $name, public $songs)
    {
        //$this->name = $name;
        //$this->songs = $songs;
    }
    public function shuffle()
    {
        shuffle($this->songs);
    }
}

$playlists = [];
$playlists[] = new Playlist('80s Headbangers', [
    'Back in black',
    'Are you ready',
    'Hells bells'
]);

$playlists[0]->shuffle();

die(var_dump($playlists));


//Properties are like variables for an object.
//Public means the property is publicly available to outside world.
//For our blueprints, we can have any number of instances or implementations of that blueprint.

