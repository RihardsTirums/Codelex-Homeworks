<?php

echo "Enter Min number: ";
$min = readline("Min number: ");
echo "Enter Max number: ";
$max = readline("Max number: ");

for ($i = $min; $i < $min + $max; $i++){
    for ($j = 0; $j < $max; $j++){
        echo (($j + $i - $min) % ($max) + $min);
    }
    echo PHP_EOL;
}
