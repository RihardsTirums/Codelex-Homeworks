<?php
// Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position in meters. The formula in Math notation is:
//Note: The correct value is -490.5m.

$gravity = -9.81;
$initialVelocity = 0;
$time = 10;
$initialPosition = 0;
$finalPosition = 0;

echo "The object's position after " . $time . " seconds is ".
 (0.5 * $gravity * pow($time,2) + $initialPosition * $time + $initialPosition)." m. ";


