<?php

// validate input
function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// save data
function write_file(string $data)
{
    $user_file = fopen("./data/login_data.txt", "a") or die("Unable to open file.");
    fwrite($user_file, $data);
    fclose($user_file);
}

// read file
function read_file()
{
    $file_data = fopen("./data/login_data.txt", "r") or die("Unable to open file.");
    $data = [];
    while (!feof($file_data)) {
        array_push($data, fgets($file_data));
    }
    fclose($file_data);
    return $data;
}

