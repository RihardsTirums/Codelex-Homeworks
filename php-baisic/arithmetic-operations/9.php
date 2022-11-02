<?php
//Write a program that calculates and displays a person's body mass index (BMI).
// A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
// Where weight is measured in pounds and height is measured in inches. Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
// A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25. If the BMI is less than 18.5, the person is considered underweight.
// If the BMI value is greater than 25, the person is considered overweight.
//
//Your program must accept metric units.

function calculateBMI ($weight, $height){
    $bmi = ($weight) / pow($height,2);
    if (18.5 <= $bmi && $bmi <= 25){
        echo "Your weight is optimal";
    } elseif ($bmi < 18.5 ){
        echo "You are under weight";
    } elseif ($bmi > 25){
        echo "You are OVERWEIGHT GO TO THE GYM";
    }
}

calculateBMI(75.8,1.80);