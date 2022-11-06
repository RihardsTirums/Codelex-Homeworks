<?php
// Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet" (based on the game "Pig").
// The player's goal is to accumulate as many points as possible without rolling a 1. Each turn, the player rolls the die; if they roll a 1, the game ends and they get a score of 0.
// Otherwise, they add this number to their running total score. The player then chooses whether to roll again, or end the game with their current point total.
// Here is an example dialogue where the user plays until rolling a 1, which ends the game with 0 points:
//Welcome to Piglet!
//You rolled a 5!
//Roll again? yes
//You rolled a 4!
//Roll again? yes
//You rolled a 1!
//You got 0 points.
//Here is another example dialogue where the user stops early and gets to end the game with 10 points:
//Welcome to Piglet!
//You rolled a 6!
//Roll again? y
//You rolled a 2!
//Roll again? y
//You rolled a 2!
//Roll again? n
//You got 10 points.
//Dice Random


$dice = rand(1,6);
$result = $dice;


echo "Welcome to Piglet!";
echo PHP_EOL;
echo "You rolled a ".$dice."!";
echo PHP_EOL;


//User confirms if wants to play
$confirm = readline("Roll again?: ");


while ($confirm != "n" || $dice == 1){
    if ($confirm == "y") {
        $dice = rand(1, 6);
        $result = $dice;
        echo "You rolled a " . $dice . "!";
        echo PHP_EOL;
        echo "Roll again? ";
        echo PHP_EOL;
        $result = $result + $dice;
    } else if ($confirm == "n"){
        echo "You got " . $result. " points";
        return $result;
    }
}


