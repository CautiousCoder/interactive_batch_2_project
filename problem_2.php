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
