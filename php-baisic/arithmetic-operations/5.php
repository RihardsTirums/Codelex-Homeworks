<?php
// Write a program that picks a random number from 1-100. DONE
// Give the user a chance to guess it. If they get it right, tell them so. DONE
// If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)

// Generate random number from 1-100.
$guessingNum = rand(1,100);
var_dump($guessingNum);

// Ask uer to input the number in console.
echo "I'm thinking of a number between 1-100 : ";
$input = readline("Try to guess the number: ");
echo $input . PHP_EOL;

// If users guesses the number correctly he wins.
if ($input == $guessingNum) {
    echo "NICE YOU GUESSED THE NUMBER CORRECTLY!!!!!! Correct number was ${guessingNum}";
    exit;
}
// If the guess is higher than the number
if ($input > $guessingNum){
    echo "Too high. Correct number was ${guessingNum}";

}
// If the guess is lower than the number
if ($input < $guessingNum){
    echo "Too low. Correct number was ${guessingNum}";
    exit;
}