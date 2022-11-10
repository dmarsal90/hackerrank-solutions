<?php

/**
 * @title Divisible Sum Pairs
 * @link https://www.hackerrank.com/challenges/divisible-sum-pairs
 * @status solved
 */

// Complete the divisibleSumPairs function below.
function divisibleSumPairs($n, $k, $ar)
{
    $total = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($p = 0; $p < $n; $p++) {
            if ((($ar[$i] + $ar[$p]) % $k === 0) && $i !== $p) {
                $total++;
            }
        }
    }

    return $total / 2;
}
?>