<?php
require_once 'Video.php';
require_once 'VideoStore.php';
require_once 'VideoStoreTest.php';


$test = new VideoStoreTest(new VideoStore());
$test->tryAddVideos();
$test->tryGiveRating();
$test->testForRentAndReturn();
$test->testListingInventory();