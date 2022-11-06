<?php
echo "Input number of terms: " .myPow(77,2);

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

function myPow($base, $exponent) {
    $result = 1;
    for($i = 0; $i < $exponent; $i++) {
        $result *= $base;
    }
    return $result;
}
