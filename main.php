<?php

$play_count = 0; //keep track of how many rounds of the game have been played
$correct_guesses = 0; // keep track of how many times they guess correctly
$guess_high = 0; // how many of their guesses were higher than the actual number
$guess_low = 0; // keep track of how many of their guessed were lower than the actual number


echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";


function guessNumber()
{
    global $play_count, $correct_guesses, $guess_high, $guess_low;

    
    $play_count++;

    $num = rand(1,10);

    echo "\nMake your guess...\n";

    $guess_value = readline(">> ");
    $guess_value = intval($guess_value);


    echo "Round: $play_count\nMy NUmber: $num\nYour Guess: $guess_value";

    if ($guess_value===$num) {
        $correct_guesses++;
    } elseif ($guess_value>$num) {
        $guess_high++;
    } else {
        $guess_low++;
    }

    $percent_correct = $correct_guesses/$play_count * 100;
    echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";
    
    if ($guess_high>$guess_low){
        echo "When you guessed wrong, you tended to guess high.";
    } else {
        echo "When you guessed wrong, you tended to guess low.";
    }

}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
