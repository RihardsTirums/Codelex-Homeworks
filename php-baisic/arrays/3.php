<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";

//todo check if an array contains a value user entered

$userInput = readline("Enter an integer:");
echo "$userInput \n";

if (in_array($userInput, $numbers)){
    echo 'Yes this number exists in array';
} else {
    echo "Sorry this number dose not exists in array";
    exit;
}