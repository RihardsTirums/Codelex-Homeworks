<?php
//Given variable (int) 50, determine if its in the range of 1 and 100.
$value = 50;
$min = 1;
$max = 100;
if ( ($min <= $value) && ($value <= $max)){
    echo " \n Value ${value} is in range of ${min} and {$max}";
} else {
    echo " \n Value ${value} is not in range of ${min} and {$max}";
}