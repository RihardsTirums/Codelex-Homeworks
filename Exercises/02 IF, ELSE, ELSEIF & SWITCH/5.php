<?php
// Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.

$int = 50;
$y = 1;
$z = 50;

if ($y <= $int && $int <= $z){
    echo "Correct";
} else {
    echo "Incorrect";
}
