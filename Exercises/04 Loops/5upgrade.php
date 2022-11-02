<?php
// Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.
class Persons
{
    public $name;
    public $surname;
    public $age;
}

$personOne = new Persons();
$personOne->name = 'John';
$personOne->surname = 'Doe';
$personOne->age = 55;

$personTwo = new Persons();
$personTwo->name = 'Pikachu';
$personTwo->surname = 'The Best';
$personTwo->age = 3;

$allPersons = array($personOne,$personTwo);

foreach ($allPersons as $person) {
    echo "This persons name is " . $person->name . " " . "and the surname is " .$person->surname. " " ."and the age is " .$person->age. "\n";
}
//var_dump($person);
// Using https://stackoverflow.com/a/8612289