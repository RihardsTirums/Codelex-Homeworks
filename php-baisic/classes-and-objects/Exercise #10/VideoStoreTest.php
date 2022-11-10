<?php
require_once 'VideoStore.php';
require_once 'Video.php';

class VideoStoreTest {
    private  VideoStore $store;

    public function __construct(VideoStore $store){
        $this->store = $store;
    }
    //Add some videos
    public function tryAddVideos(): void {
        $this->store->addVideo(new Video("The Matrix"));
        $this->store->addVideo(new Video("Godfather II"));
        $this->store->addVideo(new Video("Star Wars Episode IV: A New Hope"));

        echo "Test if videos were added: ";
        echo PHP_EOL;
        foreach ($this->store->getInventory() as $video){
            echo "Title: " . $video->getTitle();
            echo PHP_EOL;
        }
    }

    //Give several ratings to each video
    public function tryGiveRating(): void {
        $this->store->rateVideo("The Matrix",11.5);
        $this->store->rateVideo("Godfather II",4.3);
        $this->store->rateVideo("Star Wars Episode IV: A New Hope",1.3);
        $this->store->rateVideo("The Matrix",10.9);

        foreach ($this->store->getInventory() as $video) {
            echo "Title: " .$video->getTitle() . " rating is: " .$video->getRating();
            echo PHP_EOL;
        }
    }
    //Rent each video out once and return it
    public function testForRentAndReturn(): void {
        echo "Test for renting video: ";
        echo PHP_EOL;
        echo "Inventory before renting: ";
        echo PHP_EOL;
        // Before renting out
        foreach ($this->store->getInventory() as $video){
            echo "Title: " .$video->getTitle() . "rating: " . $video->getRating() . " status: " . $video->isAvailable() ? "Yes" : "No";
            echo PHP_EOL;
        }
        //After renting
        foreach ($this->store->getInventory() as $video){
            echo "Title: " . $video->getTitle() . " rating: " .$video->getRating() . " status: " . $video->isAvailable() ? "Yes" : "No";
            echo PHP_EOL;
        }
        // Return video back
        echo "Returning video back: ";
        foreach ($this->store->getInventory() as $video){
            echo "Title: " . $video->getTitle() . " rating: " . $video->getRating() . " status: " . $video->isAvailable() ? "Yes" : "No";
            echo PHP_EOL;
            $this->store->rentVideo($video->getTitle());
            echo PHP_EOL;
        }
        //Inventory after returning videos:
        echo "Inventory after returning videos back: ";
        foreach ($this->store->getInventory() as $video){
            echo "Title: " . $video->getTitle() . " rating: " .$video->getRating() . " status: " . $video->isAvailable() ? "Yes" : "No";
            echo PHP_EOL;
        }
    }

    public function testListingInventory(): void {
        echo "Inventory befoe renting out GodFather II:";
        echo PHP_EOL;

        foreach ($this->store->getInventory() as $video){
            echo "Title: " . $video->getTitle() . " rating: " .$video->getRating() . " status: " . $video->isAvailable() ? "Yes" : "No";
            echo PHP_EOL;
        }

        $this->store->rentVideo("Godfather II");

        echo "Inventory after renting out Godfather II: ";
        foreach ($this->store->listAllVideoInStore() as $video){
            echo "Title: " . $video->getTitle() . " rating: " . $video->getRating() . " status: " . $video->isAvailable() ? "Yes" : "No";
            echo PHP_EOL;
        }
    }


}
