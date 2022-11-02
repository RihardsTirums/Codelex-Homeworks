<?php
// Write a program that creates an array of ten integers. It should put ten random numbers from 1 to 100 in the array. DONE
// It should copy all the elements of that array into another array of the same size. DONE
//Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.
//Create an array of ten integers
//Fill the array with ten random numbers (1-100)
//Copy the array into another array of the same capacity
//Change the last value in the first array to a -7
//Display the contents of both arrays
//Array 1: 45 87 39 32 93 86 12 44 75 -7
//Array 2: 45 87 39 32 93 86 12 44 75 50

// Generate random array with 10 integers with range 0-100,
$random = range(0,100);
shuffle($random);
$random = array_slice($random,0,10);

// Create second array with same elements from original array
$newRandom = $random;

// Take last element form original array
$lastElement = end($random);

// Replace last element with -7
$lastElement = array_splice($random,-1,2,[-7]);


// 1st array
echo "Array 1:";
for ($i = 0; $i < count($random); $i++){
    echo " $random[$i] " ;
}

// 2nd array
echo PHP_EOL;
echo "Array 2:";
for ($i = 0; $i < count($newRandom); $i++){
    echo " $newRandom[$i] " ;
}

