<?php
require_once "Video.php";
class VideoStore {
    // Inventory of all movies
    private array $inventory;

    public function __construct(array $inventory = []){
        $this->inventory = $inventory;
    }
    // Add new Video to video inventory [].
    public function addVideo (Video $video) :void {
        $this->inventory[] = $video;
    }
    // Get inventory
    public function getInventory():array{
        return $this->inventory;
    }
    //List all video to customer
    public function listAllVideoInStore():array {
        $moviesInStore = [];
        foreach ($this->inventory as $movie){
            if ($movie->isAvailable()){
                $moviesInStore = $movie;
            }

        }
        return $moviesInStore;
    }
    // List all rented Movies
    public function listRentedMovies():array{
        $moviesRented = [];
        foreach ($this->inventory as $movie){
            if (!$movie->isAvailable()){
                $moviesRented = $movie;
            }

        }
        return $moviesRented;
    }
    //Rent Video
    public function rentVideo(string $title):void {
        foreach ($this->inventory as $movie){
            if ($movie->getTitle() == $title && $movie->isAvailable()){
                $movie->isRented();
            }
        }
    }
    // Return Video
    public function returnVideo(string $title): void {
        foreach ($this->inventory as $movie){
            if ($movie->getTitle() == $title && !$movie->isAvailable()){
                $movie->beingReturned();
            }
        }
    }
    // Rate Video
    public function rateVideo(string $title, float $rating): void {
        foreach ($this->inventory as $movie){
            if ($movie->getTitle() == $title){
                $movie->rateVideo($rating);
            }
        }
    }
}