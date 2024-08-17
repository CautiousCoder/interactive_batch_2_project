
# Assignment 1

## Problem 1
Given a list of integers, find the minimum of their absolute values. 
Note:
'Absolute values' means the non-negative value without regard to its sign. For example, the Absolute value of 123 is 123, and the Absolute value of -123 is also 123. 

Sample input 1:
10 12 15 189 22 2 34
Sample output 1: 
2

Sample input 2:
10 -12 34 12 -3 123
Sample output 2:
3

## Solution
```bash
<?php
    // Problem 1
    // input list of integers as a string
    // explode string into array
    $arr = explode(' ', readline());
    
    // negative value convert to positive
    $non_negative_array = [];
    foreach($arr as $element){
        $integer_number = intval($element);
        if($integer_number < 0){
            array_push($non_negative_array, -1*$integer_number);
            continue;
        }
        array_push($non_negative_array, $integer_number);
    }
    
    // get minimum value
    $min = $non_negative_array[0];
    foreach($non_negative_array as $p){
        if($p < $min) $min = $p;
    }
    
    // output
    echo $min."\n";
    // print
    // print_r($non_negative_array);

```

## Problem 2
Given a few paragraphs in a file, read the file and count how many words are there. 
For example, if there is a file with the following contents:

Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor.  

You need to output: 10

Because there are 10 words. 
Note: There can be multiple paragraphs. You need to count all of the words from all of the paragraphs. 
You need to read the data from a file.

## Solution

```bash
<?php
    // Problem 1

    $file = fopen("problem_2_input_text.txt", "r") or die("Can't read the file");

    function wond_count($element){
        $word = explode(' ', trim($element));
        return count($word);

        // using predefine function
        // return str_word_count($element);
    }

    $line_array = [];
    // $no_of_word_per_line = fread($file, filesize("problem_2_input_text.txt"));
    while (!feof($file)) {
        array_push($line_array, fgets($file));
    }
    $no_of_word_per_line = array_map("wond_count", $line_array);

    $total_word = 0;

    foreach ($no_of_word_per_line as $word) {
        $total_word += $word;
    }

    echo $total_word ."\n";
    // print_r($no_of_word_per_line);

    fclose($file);

```
#### Input text file is required in the same location, like as
```bash
problem_2_input_text.txt
```


## Problem 3
Given a sentence, keep the order of the words same, but reverse the characters of each word. 
For example, if the given sentence is: ‘I love programming’ 
The result should be: ‘I evol gnimmargorp’

Here the order of the words is the same as the given sentence, but the order of the characters in the words is reversed.


## Solution
```bash
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
```

## Problem 4
Print the following pattern based on the given number n (can be any number). 
Sample input: 5 
Sample output: 
```bash
        *
       ***
      *****
     *******
    *********
```

## Solution

```bash
<?php
// Problem 4

// get user input
while (1) {
    echo "Given number n:\n";
    $str = trim(readline());
    if (intval($str)) {
        break;
    }
}
$n = intval($str);
for ($i = 1; $i <= $n; $i++) {
    $k = 0;
    while ($k < $n - $i) {
        echo ' ';
        $k++;
    }

    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    echo "\n";
}

```

## Problem 5
Given an integer n, find the sum of the digits of the integer.

Sample input 1:
62343
Sample output 1: 
18

Sample input 2:
1000
Sample output 2: 
1


## Solution

```bash
<?php
// Problem 5

// get user input
while (1) {
    echo "Given an integer number n:\n";
    $str = trim(readline());
    if (intval($str)) {
        break;
    }
}
$n = intval($str);
$n < 0 ? $n = -1 * $n : $n;

$sum = 0;
while ($n > 0) {
    $rem = $n % 10;
    $n /= 10;
    $sum += $rem;
}

echo $sum;
```

