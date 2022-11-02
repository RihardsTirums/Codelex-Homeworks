<?php
//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise.
// The program shall always print “bye!” before exiting.

function CheckOddEven ($num) {
    if (($num & 1) == 1) {
        echo "This is Odd number";
        echo PHP_EOL;
        echo "Bye";
    } else {
        echo "This is Even number";
        echo PHP_EOL;
        echo "Bye";
    }
}




CheckOddEven(456);
