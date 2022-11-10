<?php

/**
 * @title Find Digits
 * @link https://www.hackerrank.com/challenges/find-digits
 * @status solved
 */

// Complete the findDigits function below.
function findDigits($n)
{
    $count = 0;

    foreach (str_split($n) as $number) {
        if ($number > 0 && $n % $number === 0) {
            $count++;
        }
    }

    return $count;
}
?>