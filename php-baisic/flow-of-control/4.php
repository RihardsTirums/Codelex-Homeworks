<?php
// Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6, respectively. Otherwise, it shall print "Not a valid day".

echo "Please enter the number fro 0-6 to represent the day: ";
$userInput = readline("Please enter the number fro 0-6 to represent the day: ");

if ($userInput == 0){
    echo "Sunday";
} elseif ($userInput == 1) {
    echo "Monday";
}elseif ($userInput == 2) {
    echo "Tuesday";
}
elseif ($userInput == 3) {
    echo "Wednesday";
}
elseif ($userInput == 4) {
    echo "Thursday";
}
elseif ($userInput == 5) {
    echo "Friday";
}
elseif ($userInput == 6) {
    echo "Saturday";
} else {
    echo "Not a valid day";
}