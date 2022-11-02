<?php
//Create an array with integers (up to 10) and print them out using for loop.
$array[] = range(0,10);

for ($i = 0; $i < count($array); $i++) {
    print_r($array);
}
