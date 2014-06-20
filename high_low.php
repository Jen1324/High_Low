 <?php

if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
	echo "I have no idea what you're talking about, buddy.\n"; #jk you're not my buddy
	exit(1);
}


fwrite(STDOUT, "Guess a number between {$argv[1]} and {$argv[2]}.");

$number = mt_rand($argv[1], $argv[2]);

$guess = (int) fgets(STDIN);

$total = 1;

while ($guess != $number) {

	if ($guess < $number) { 
		fwrite(STDOUT, "Higher\n");
		$guess = (int) fgets(STDIN);

	} 	elseif ($guess > $number) { 
		fwrite(STDOUT, "Lower\n");
		$guess = (int) fgets(STDIN);

 	} //	elseif ($guess == $number) { 

	$total++;  

}

	fwrite(STDOUT, "Correct!\n");
	fwrite(STDOUT, "It took you $total tries to guess this number.\n");


// 	PHP_EOL;

	//Nick's beautiful version

// $number = mt_rand(1, 1000);
// $total = 1;

// fwrite(STDOUT, 'Guess the number!'); 
// 	$guess = (int) fgets(STDIN);

//  while($guess != $number){
// 	$total++;

// 	fwrite(STDOUT, ($guess < $number ? 'Higher' : 'Lower') . "!\n");
// 	$guess = (int) fgets(STDIN);
// }

// fwrite(STDOUT, "Correct!\nIt took you {$total} tries to guess this number.\n");



//notes

// create a number

// while the user hasn't guessed correctly

	// prompt user guess a number

	// get a guess from the user

	// check the number and the guess

	// if the guess is higher than the number then tell the user "lower"

	// if the guess is lower than the number then tell the user "higher"

	// add the guess count

	// if guess and the number are the same say "winner!" and end the game

// end the loop


















