<?php

/**
 * @title Pangrams
 * @link https://www.hackerrank.com/challenges/pangrams
 * @status solved
 */

// Complete the pangrams function below.
function pangrams($s)
{
    $letters = range('a', 'z');
    $word = str_split(strtolower($s));

    foreach ($word as $letter) {
        $index = array_search($letter, $letters, false);
        if ($index !== false) {
            unset($letters[$index]);
        }
    }

    return !empty($letters) ? 'not pangram' : 'pangram';
}
?>