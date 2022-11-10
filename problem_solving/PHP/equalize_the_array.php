<?php

/**
 * @title Equalize the Array
 * @link https://www.hackerrank.com/challenges/equality-in-a-array
 * @status solved
 */

// Complete the equalizeArray function below.
function equalizeArray($arr)
{
    $count = 0;
    $numbers = [];
    foreach ($arr as $number) {
        if (isset($numbers[$number])) {
            $numbers[$number]++;
        } else {
            $numbers[$number] = 1;
        }
    }

    $maxValue = array_search(max($numbers), $numbers, false);

    foreach ($arr as $number) {
        if ($number !== $maxValue) {
            $count++;
        }
    }

    return $count;
}
?>