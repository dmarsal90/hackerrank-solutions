<?php

/**
 * @title Funny String
 * @link https://www.hackerrank.com/challenges/funny-string
 * @status solved
 */

// Complete the funnyString function below.
function funnyString($s)
{
    $first = [];
    $second = [];

    $array = str_split($s);
    foreach ($array as $k => $letter) {
        if ($letter && isset($array[$k + 1])) {
            $first[] = abs(ord($letter) - ord($array[$k + 1]));
        }
    }

    $array = array_reverse(str_split($s));
    foreach ($array as $k => $letter) {
        if ($letter && isset($array[$k + 1])) {
            $second[] = abs(ord($letter) - ord($array[$k + 1]));
        }
    }

    return count(array_diff_assoc($first, $second)) > 0 ? 'Not Funny' : 'Funny';
}
?>