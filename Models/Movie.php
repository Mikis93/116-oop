<?php

class Movie
{
    private $id;
    private $title;
    private $genre;

    // Costruttore della classe
    public function __construct($id, $title, $genre)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
    }

    // Metodi getter
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    // Metodi setter
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
}
