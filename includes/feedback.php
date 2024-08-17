<?php

function set_feedback($feedback)
{
    $feedback_file = fopen("./data/feedback.txt", "a") or die("Unable to open file.");
    fwrite($feedback_file, $feedback);
    fclose($feedback_file);

}

function get_feedback()
{
    $feedback_file = fopen("./data/feedback.txt", "r") or die("Unable to open file.");
    $feedback = [];
    while (!feof($feedback_file)) {
        array_push($feedback, fgets($feedback_file));
    }
    fclose($feedback_file);
    return $feedback;
}

