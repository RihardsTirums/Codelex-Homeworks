<?php
// Write a program to play a word-guessing game like Hangman.
//
//It must randomly choose a word from a list of words. DONE
//It must stop when all the letters are guessed. DONE
//It must give them limited tries and stop after they run out. DONE
//It must display letters they have already guessed (either only the incorrect guesses or all guesses).

// Array of guessing words.
$words = ['codelex','code','php','bug','programming','game','html','css','typescript','javascript'];

// Select 1 word from words array
$word = $words[array_rand($words)];

//Split word by letters
$letters = str_split($word);
$correctWord = str_split(str_repeat('-',strlen($word)));


//Repeat '-' for every letter.
echo implode('',$correctWord);
echo PHP_EOL;

$guesses = 0;
$maxGuesses = strlen($word) + 3; //How many times user can guess the letters.
// Letters that user have tried already
$usedLetters = [];
while ($guesses < $maxGuesses && in_array('-',$correctWord) ) {
    // Here user enters letters
    echo "Enter letter: ";
    $letter = readline('Enter letter: ');
    // Find letter key in array
    $letterPositions = array_keys($letters,$letter);
    // If user guesses right letter
    if (count($letterPositions) > 0) {
        foreach ($letterPositions as $position) {
            // Place the correct letter in right position
            $correctWord[$position] = $letter;
        }
    }
    // If user didn't guess the correct letter
    if (!count($letterPositions) > 0) { //+
        echo 'Wrong letter' .PHP_EOL; // +
        $letterPositions = array_push($usedLetters,$letter);
        foreach ($usedLetters as $wrong){
            echo "You already tried these letters: $wrong". PHP_EOL; // +
        }
        //var_dump($usedLetters);
    }

    // Output correct word.
    echo implode('',$correctWord);
    echo PHP_EOL;
    $guesses++;
}
// At the end of the game if win show winning message or if lose show losing message.
if (in_array('-',$correctWord)){
    echo "You lose !";
} else {
    echo "You win VERY NICE !!! Correct word was: " . $word;
}
