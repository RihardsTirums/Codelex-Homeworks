<?php
// Write a program that reads an positive integer and count the number of digits the number has.
// https://www.geeksforgeeks.org/program-count-digits-integer-3-different-methods/
// https://stackoverflow.com/questions/28433798/php-get-length-of-digits-in-a-number
echo "Please enter a positive integer: ";
$userInput = readline("Please enter a positive integer: ");

function checkCount($userInput) {
    $count = $userInput !== 0 ? floor(log10($userInput) + 1) : 1;
   echo PHP_EOL;
   return $count;

}

echo "The count is: " .checkCount($userInput);

