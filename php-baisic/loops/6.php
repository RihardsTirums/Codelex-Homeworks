<?php
//Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.
$size  = 1;
$width = 7;
for ($i = $size; $i <= $width; $i++){

    for ($j = 1; $j <= 28 - 4 * $i; $j++){
        echo "/";

    }
    for ($j = 1; $j <= 8 * $i -8; $j++){
        echo "*";
    }

    for ($j = 1; $j <= 28 - 4 * $i; $j++){
        echo "\\";
    }
    echo PHP_EOL;
}

