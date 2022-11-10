<?php
require_once "VideoStore.php";
class Video {

    private string $title; // Movie title
    private ?bool $flag = true; // Is available ?
    private array $allRatings = []; // All ratings

    public function __construct(string $title, ?float $rating = null){
        $this->title = $title;
        $this->allRatings[] = $rating;
    }
    // Get Title
    public function getTitle(): string{
        return $this->title;
    }
    // Give rate
    public function rateVideo (float $rating): void{
        $this->allRatings[] = $rating;
    }

    public function getRating(): string{
        if (count($this->allRatings) == 0){
            return "There are no ratings yet";
        }
        return round(array_sum($this->allRatings) / count($this->allRatings));
    }
    // Is Available ?
    public function isAvailable ():bool{
        return $this->flag;
    }
    //Is movie rented ?
    public function isRented (): void{
        $this->flag = false;
    }
    // Is movie returned ?
    public function isReturned():void{
        $this->flag = true;
    }

}

