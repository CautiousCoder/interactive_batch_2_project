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