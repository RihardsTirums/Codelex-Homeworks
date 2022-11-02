<?php
// Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.
/*$people = [
    [   "name" => 'John',
        "surname" => "Doe",
        "age" => "44",
        "birthday" =>"30.05.1973"
    ],
    [   "name" => 'Bill',
        "surname" => "Gates",
        "age" => "64",
        "birthday" =>"10.07.1949"
    ],

];*/


/*foreach ($people as $person) {
    print_r($person);
}*/

$peoples = new stdClass();
$peoples->name = 'John';
$peoples->surname = 'Doe';
$peoples->age = 44;
$peoples->birthday = '30.05.1973';

$peoples = new stdClass();
$peoples->name = 'Bill';
$peoples->surname = 'Gates';
$peoples->age = 64;
$peoples->birthday = '3.05.1943';

$pep = [
    $peoples
];

foreach ($peoples as $people){
    print_r("\n$people") ;
}
