<?php
echo "Enter the number: ";
$userInput = readline("Enter the number: ");

//todo print if number is positive or negative
if($userInput > 0){
    echo "The number is positive";
}
elseif($userInput < 0){
    echo "The number is negative";
}
else{
    echo "The number is zero";
}