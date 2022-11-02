<?php
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int. Take note that it is the same as factorial of N.

$number = 1;
$maxNum = 10;
for ($i = 1; $i <= $maxNum; $i++){
    $number *= $i;
}
echo $number;