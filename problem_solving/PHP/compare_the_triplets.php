<?php

/**
 * @title Compare the Triplets
 * @link https://www.hackerrank.com/challenges/compare-the-triplets
 * @status solved
 */


// Complete the compareTriplets function below.
function compareTriplets($a, $b)
{
    $aValue = 0;
    $bValue = 0;

    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $aValue++;
        } elseif ($a[$i] < $b[$i]) {
            $bValue++;
        }
    }

    return [$aValue, $bValue];
}
?>