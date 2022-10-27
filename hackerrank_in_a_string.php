<?php

/**
 * @title HackerRank in a String!
 * @link https://www.hackerrank.com/challenges/hackerrank-in-a-string
 * @status solved
 */

// Complete the hackerrankInString function below.
function hackerrankInString($s)
{
    $word = 'hackerrank';
    foreach (str_split($s) as $letter) {
        if ($letter === $word[0]) {
            $word = substr($word, 1);
        }
    }

    return strlen($word) > 0 ? 'NO' : 'YES';
}
?>