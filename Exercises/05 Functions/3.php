<?php
// Create a person object with name, surname and age.
// Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.

$person = new stdClass();
$person->name = 'Bill';
$person->surname = 'Gates';
$person->age = 64;

function validate($age) {
    if ($age >= 18) {
        echo "You are old enough";
    } else {
        echo "YOU ARE NOT OLD ENOUGH!!!!!!!";
    }
}

//echo validate($person->age);
