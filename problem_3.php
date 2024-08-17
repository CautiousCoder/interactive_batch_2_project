<?php
// Problem 3

$str = trim(readline());

$word_array = explode(" ", $str);


// reverse word
function Reverse_word($word)
{
    // use predefine function
    // return strrev($word);
    $length = strlen($word);
    $str = null;
    for ($i = $length - 1; $i >= 0; $i--) {
        $str .= $word[$i];
    }
    return $str;
}

$reverse_word = array_map("Reverse_word", $word_array);

echo join(" ", $reverse_word) . "\n";

// print_r($reverse_word);