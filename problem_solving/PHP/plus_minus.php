<?php

/**
 * @title Plus Minus
 * @link https://www.hackerrank.com/challenges/plus-minus
 * @status solved
 */

// Complete the plusMinus function below.
function plusMinus($arr)
{
    $positives = 0;
    $negatives = 0;
    $zeros = 0;
    $count = count($arr);

    foreach ($arr as $number) {
        if ($number === 0) {
            $zeros++;
        } elseif ($number > 0) {
            $positives++;
        } else {
            $negatives++;
        }
    }

    $result = [];
    $result[] = round($positives / $count, 6);
    $result[] = round($negatives / $count, 6);
    $result[] = round($zeros / $count, 6);

    echo implode(PHP_EOL, $result);
}
