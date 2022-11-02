<?php

function areaOfTheCircle($r){
    if ($r <= 0){
        echo "Error";
        //exit;
    } else {
        $radius = (pi() * $r * 2);
        return $radius;
    }
}

echo areaOfTheCircle(4);
echo PHP_EOL;

function areaOfRectangle($length,$width){
    if ($length <= 0 || $width <= 0){
        echo "Error";
    } else {
        $area = $length * $width;
        return $area;
    }

}

echo areaOfRectangle(8,5);
echo PHP_EOL;

function areaOfTheTriangle($lengthBase,$height){
    if ($lengthBase <= 0 || $height <= 0){
        echo "Error";
        exit;
    } else {
        $total = $lengthBase * $height * 0.5;
        return $total;
    }

}
echo areaOfTheTriangle(7,7);
echo PHP_EOL;