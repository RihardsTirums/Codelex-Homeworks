<?php
// Write a program to produce the sum of 1, 2, 3, ..., to 100.
// Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
// Also compute and display the average. The output shall look like:
//The sum of 1 to 100 is 5050
//The average is 50.5


//Define variables
$sum = 0;
$lower = 1;
$upper = 100;

for ($i = $lower; $i <= $upper; $i++){
    $sum = $sum + $i;
}
for ($i = $lower; $i <= $upper; $i++){
    $average = $sum/$upper;

}
echo "The sum of 1 to 100 is: $sum";
echo PHP_EOL;
echo "The sum of 1 to 100 is: $average";
