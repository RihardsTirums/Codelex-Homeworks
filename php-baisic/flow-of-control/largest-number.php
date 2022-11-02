<?php
echo "Input the 1st number: ";
$firstNumber = readline("Input the 1st number: ");
echo $firstNumber;
echo PHP_EOL;

echo "Input the 2nd number: ";
$secondNumber = readline("Input the 1st number: ");
echo $secondNumber;
echo PHP_EOL;

echo "Input the 3rd number: ";
$thirdNumber = readline("Input the 1st number: ");
echo $thirdNumber;
echo PHP_EOL;

//todo print the largest number
if ($firstNumber>$secondNumber && $firstNumber>$thirdNumber){
    echo "Largest number is: $firstNumber";
} else {
    if ($secondNumber>$firstNumber && $secondNumber>$thirdNumber){
        echo "Largest number is: $secondNumber";
    } else {
        echo "Largest number is: $thirdNumber";
    }
}
