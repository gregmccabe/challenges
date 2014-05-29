<?php

echo "Welcome to alphabet soup!" . PHP_EOL;
sleep(2);
echo "Please enter a word or phrase: ";

$str = trim(fgets(STDIN));
echo PHP_EOL;
//explode
$input_array = explode(" ", $str);

function alphabet_soup($string) {
    $array = str_split($string);
    natcasesort($array);
    $string = implode($array);
    // return $string ? strtoupper($str) : $str;
    return $string;
}
foreach ($input_array as $value) {
    echo alphabet_soup($value) . " ";

}
    // $array = alphabet_soup($str);
    // print_r($string);

// Create a function alphabet_soup($str) that accepts a string and will return the string in alphabetical order. E.g. "hello world" becomes "ehllo dlorw". So make sure your function separates and alphabetizes each word separately.

?>

