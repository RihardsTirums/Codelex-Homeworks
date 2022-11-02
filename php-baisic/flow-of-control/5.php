<?php
// On your phone keypad, the alphabets are mapped to digits as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//
//Write a program called PhoneKeyPad, which prompts user for a String (case insensitive), and converts to a sequence of keypad digits.
//
//Use:
//
//a "nested-if" statement
//a "switch-case-default" statement
//Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,

echo "Please enter the string or strings to convert :";
$userInput = readline('Please enter the string or strings to convert :');

$splitInput = str_split(strtoupper($userInput));

function PhoneKeyPad($letters): int {
    $number = [];

    foreach ($letters as $letter) {
        switch ($letter) {
            case 'A':
            case 'B':
            case 'C':
                $number[] = 2;
                break;
            case 'D':
            case 'E':
            case 'F':
                $number[] = 3;
                break;
            case 'G':
            case 'H':
            case 'I':
                $number[] = 4;
                break;
            case 'J':
            case 'K':
            case 'L':
                $number[] = 5;
                break;
            case 'M':
            case 'N':
            case 'O':
                $number[] = 6;
                break;
            case 'P':
            case 'Q':
            case 'R':
            case 'S':
                $number[] = 7;
                break;
            case 'T':
            case 'U':
            case 'V':
                $number[] = 8;
                break;
            case 'W':
            case 'X':
            case 'Y':
            case 'Z':
                $number[] = 9;
                break;
            default:
                echo PHP_EOL;
                echo "Invalid input!";
        }
    }
    return implode('', $number);
}

echo PhoneKeyPad($splitInput);