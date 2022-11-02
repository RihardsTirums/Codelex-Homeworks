<?php
// Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

require '3.php';

$array = [
   [ "name"=>"Harry",
       "age" => 39
   ],
    [ "name"=>"James",
        "age" => 9
    ],
];

echo validate($array[0]["age"]);