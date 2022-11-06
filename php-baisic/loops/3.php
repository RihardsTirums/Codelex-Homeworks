<?php
//Write a program that asks the user to enter two words. The program then prints out both words on one line.
// The words will be separated by enough dots so that the total line length is 30:
//Enter first word:
//turtle
//Enter second word
//153
//turtle....................153
//This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.

// Ask user for 2 words
echo "Enter First word: ";
$firstInput = readline("Enter First word: ");

echo "Enter First word: ";
$secondInput = readline("Enter First word: ");

$result = $firstInput . "" .$secondInput;
$counting = strlen($result);
$periods = 0;

if ($counting <= 30){
    $periods = 30 - $counting;
    $dots = "";
    for ($i = 1;$i <= $periods;$i++){
        $dots = $dots . ".";
        echo PHP_EOL;
        echo $firstInput . $dots . $secondInput;
    }
}