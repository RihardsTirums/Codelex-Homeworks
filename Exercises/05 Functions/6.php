<?php
//Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
// Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
// Create a function that doubles the integer number.
// Within the loop using php in-built function print out the double of the number value (using your custom function).

$array = [1,10,100,1.5,"code"];

function doubles ($array) {
    for ($i = 0; $i < count($array); $i++) {
        if(is_int($array[$i])){
            $test = $array[$i]*2;
            echo "${test} \n";
        }
    }
}
doubles($array);
