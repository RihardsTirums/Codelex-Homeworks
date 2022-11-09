<?php

require_once 'Movie.php';
$movieList = new MovieListing();
$movieList->addMovie(new Movie("Casino Royale","Eon Productions","PG13"));
$movieList->addMovie(new Movie("Glass","Buena Vista International","PG13"));
$movieList->addMovie(new Movie("Spider-Man: Into the Spider-Verse","Columbia Pictures","PG"));

foreach ($movieList->getPG() as $movie){
    echo "Title: " . $movie->getTitle();
    echo PHP_EOL;
    echo "Studio: " . $movie->getStudio();
    echo PHP_EOL;
    echo "Rating: " . $movie->getRating();
}



