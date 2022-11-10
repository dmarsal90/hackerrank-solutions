<?php

/**
 * @title Diagonal Difference
 * @link https://www.hackerrank.com/challenges/diagonal-difference
 * @status solved
 */

// Complete the diagonalDifference function below.
function diagonalDifference($arr)
{
    $first = 0;
    $second = 0;
    $count = count($arr);

    $firstIterator = 0;
    $secondIterator = $count - 1;
    for ($i = 0; $i < $count; $i++) {
        $first += $arr[$i][$firstIterator];
        $second += $arr[$i][$secondIterator];
        $firstIterator++;
        $secondIterator--;
    }

    return abs($first - $second);
}
?>