<?php
// Create a variable $number with integer by your choice.
// Create a switch statement that prints out text "low" if the value is under 50,
// "medium" if the case is higher than 50 but lower than 100, "high" if the value is >100.
 $number = 100;
 $fifty = 50;
 $hundred = 100;

 switch ($number){

     case $number < $fifty:
         echo "low";
         break;

     case $number >= $fifty && $number <= $hundred:
         echo "medium";
         break;

     case $number >= $hundred:
         echo "high";
         break;

 }