<?php
# Palindrome

// Create a function that can detect whether a word is a palindrome or not. A palindrome is a word that can be interpreted the same way in reverse order.

// [Palindrome on Wiki](http://en.wikipedia.org/wiki/Palindrome)



// ## Try the following known palindromes in your function

// 1. Amore, Roma
// 2. A man, a plan, a canal: Panama
// 3. No 'x' in 'Nixon
echo "Welcome to Palindrome!\n";
sleep(2);
echo "Please enter a word of phrase?\n";
echo PHP_EOL;

$userInput = trim(fgets(STDIN));

function palindrome($word) {
	$word = strtolower($word);
	// $word = preg_replace('/[^A-z0-9]/','',$word) this line is not my work advanced programmer help with this line.
	$reverse = strrev($word);
	
	if ($word == $reverse) {
		echo $word . ' ' . "is a Palindrome!\n";
	} else {
		echo "This is NOT a Palindrome\n";
	}
	return $word;
}

palindrome($userInput) . PHP_EOL;
?>