<?php
// Create a non associative array with integers and print out only integers that divides by 3 without any left.
$array = [1,2,3,4,5,6,7,8,9,10];

foreach ($array as $numbers) {
    if($numbers % 3 == 0){
        echo PHP_EOL .($numbers);
    }
}
