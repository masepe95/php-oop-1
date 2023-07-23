<?php
// importo actors 
include __DIR__ . '/Actors.php';
class Movie
{

    public $title;
    public $actors;
    public $genre;

    // Constructor 
    public function __construct($title, Actor $actors, $genre)
    {
        $this->title = $title;
        $this->actors = $actors;
        $this->genre = $genre;
    }
    // Methods 
    public function getMovieInfo()
    {
        return "The movie name is $this->title, <br> the genre is: $this->genre";
    }
}
