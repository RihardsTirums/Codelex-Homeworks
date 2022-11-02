<?php
require "10.php";

echo "Geometry calculator: ";
echo PHP_EOL;
echo "1 Calculate the Area of a Circle";
echo PHP_EOL;
echo "2 Calculate the Area of a Rectangle";
echo PHP_EOL;
echo "3 Calculate the Area of a Triangle";
echo PHP_EOL;
echo "4 Quit";
echo PHP_EOL;
echo "Enter your choice (1-4):";

$userInput = readline("Enter the number for selection: ");
echo $userInput;

if ($userInput == 1){
    echo "\n Please enter the radius: ";
    echo PHP_EOL;
    $a = readline("Please enter radius");
    echo PHP_EOL;
    echo areaOfTheCircle($a);

} elseif ($userInput == 2) {
    echo "\n Please enter length";
    echo PHP_EOL;
    $b = readline("Please enter length");
    echo PHP_EOL;
    echo "Please enter width";
    echo PHP_EOL;
    $c = readline("Please enter width");
    echo PHP_EOL;
    echo areaOfRectangle($b,$c);
} elseif ($userInput == 3) {
    echo "\n Please enter length base";
    echo PHP_EOL;
    $d = readline("Please enter length base");
    echo PHP_EOL;
    echo "Please enter height ";
    echo PHP_EOL;
    $e = readline("Please enter height");
    echo PHP_EOL;
    echo areaOfTheTriangle($d, $e);
} elseif ($userInput == 4) {
    echo "\n You have quited the application";
    exit;
} else {
    echo "\n WRONG INPUT!";
    exit;
}






