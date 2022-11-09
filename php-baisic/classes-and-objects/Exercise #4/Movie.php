<?php

class Movie {
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating){
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getTitle():string{
        return $this->title;
    }

    public function getStudio():string{
        return $this->studio;
    }

    public function getRating():string{
        return $this->rating;
    }


}

class MovieListing {
    private array $movies;
    private array $pgMovies = [];
    private  Movie $film;

    public function addMovie (Movie $film){
        $this->movies[] = $film;
    }

    public function getMovie():array{
        return $this->movies;
    }

    public function getPG():array{
        foreach ($this->movies as $movie){
            if ($movie->getRating() == "PG"){
                $this->pgMovies[] = $movie;
            }

        }
        return $this->pgMovies;
    }
}