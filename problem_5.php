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