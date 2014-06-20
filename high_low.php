<?php

if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
    echo "I have no idea what you're talking about, buddy.\n";
    exit(1);
}

// prompt user guess a number
fwrite(STDOUT, "Guess a number between {$argv[1]} and {$argv[2]}.");

// create a number
$number = mt_rand($argv[1], $argv[2]);

// get a guess from the user
$guess = (int) fgets(STDIN);

$total = 1;

// while the user hasn't guessed correctly
while ($guess != $number) {

    // if the guess is lower than the number then tell the user "higher"
    // if the guess is higher than the number then tell the user "lower"
    if ($guess < $number) { 
        fwrite(STDOUT, "Higher\n");
        $guess = (int) fgets(STDIN);

    } elseif ($guess > $number) { 
        fwrite(STDOUT, "Lower\n");
        $guess = (int) fgets(STDIN);

    }

    // add the guess count
    $total++;
}

// if guess and the number are the same say "winner!" and end the game
fwrite(STDOUT, "Correct!\n");
fwrite(STDOUT, "It took you $total tries to guess this number.\n");
