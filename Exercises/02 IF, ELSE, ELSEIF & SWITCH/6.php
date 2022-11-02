<?php
// Create a variable $plateNumber that stores your car plate number. Create a switch statement that prints out that its your car in case of your number.
$plateNumber = "RT-777";

switch ($plateNumber) {
    case "GG-42":
        echo "You're car plate number is ${plateNumber}.";
        break;
    case "RT-42":
        echo "You're car plate number is ${plateNumber}.";
        break;
    case "RT-777":
        echo "You're car plate number is ${plateNumber}.";
        break;
    default:
        echo "Can't find ypu're [late number";
}