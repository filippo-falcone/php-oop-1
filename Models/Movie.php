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
    public function __construct($_title, $_director, $_year, $_country, Array $_genre, $_duration, $_rating) {
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
        return $this->title . ' - ' . $this->director . ' - ' . $this->year . ' - ' . $this->country . ' - ' . implode(', ', $this->genre) . ' - ' . $this->duration . ' - ' . $this->rating;
    }
}
?>