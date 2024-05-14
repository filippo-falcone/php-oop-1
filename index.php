<?php
class Movie {
    public $title;
    public $director;
    public $year;
    public $country;
    public $genre;
    public $duration;
    public $rating;

    // Costruttore
    public function __construct($_title, $_director, $_year, $_country, $_genre, $_duration, $_rating) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->country = $_country;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->rating = $_rating;
    }

    // Metodi
    public function getMoveInfo() {
        return $this->title . ' ' . $this->director . ' ' . $this->year . ' ' . $this->country . ' ' . $this->genre . ' ' . $this->duration . ' ' . $this->rating;
    }
}

$movie1 = new Movie('Avatar', 'James Cameron', 2009, 'USA', 'Fantasy', 162, 7.8);
$movie2 = new Movie('The Lord of the Rings: The Fellowship of the Ring', 'Peter Jackson', 2001, 'USA', 'Fantasy', 178, 8.8);
$movie3 = new Movie('Avatar: The way of water', 'James Cameron', 2022, 'USA', 'Fantasy', 162, 7.8);
$movie4 = new Movie('The Lord of the Rings: The Two Towers', 'Peter Jackson', 2002, 'USA', 'Fantasy', 179, 8.7);
$movie5 = new Movie('The Lord of the Rings: The Return of the King', 'Peter Jackson', 2003, 'USA', 'Fantasy', 201, 8.9);
$movie6 = new Movie('Dune: Part One', 'Denis Villeneuve', 2021, 'USA', 'Fantasy', 155, 8.3);
$movie7 = new Movie('The Boy and the Heron', 'Hayao Miyazaki', 2023, 'Japan', 'Fantasy', 134, 8.1);
$movie8 = new Movie('Il traditore', 'Marco Bellocchio', 2019, 'Italy', 'Biography', 153, 7.1);
$movie9 = new Movie('X2', 'Bryan Singer', 2003, 'USA', 'Fantasy', 134, 7.4);
$movie10 = new Movie('The tales of the princess Kaguya', 'Isao Takahata', 2013, 'Japan', 'Fantasy', 137, 8.0);


$movies = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6, $movie7, $movie8, $movie9, $movie10];

var_dump($movies);
var_dump($movie1->getMoveInfo());
?>