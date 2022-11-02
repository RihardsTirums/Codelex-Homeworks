<?php
// Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

/*// Ask for user for the first input
echo "Please enter 1 integer:";
$firstNumber = (int)readline("Input the first integer number: ");

// Ask for user for the second input
echo "Please enter 2 integer:";
$secondNumber = (int)readline("Input the second integer number: ");*/

function validate ($firstNumber,$secondNumber) {

    if ($firstNumber == 15 || $secondNumber == 15 || $firstNumber + $secondNumber == 15 || abs($firstNumber - $secondNumber) == 15) {
        return true;
    } else {
        return false;
    }

}

var_dump(validate(35,20));
var_dump(validate(5,90));
var_dump(validate(7,8));
