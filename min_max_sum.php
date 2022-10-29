<?php

/**
 * @title Mini-Max Sum
 * @link https://www.hackerrank.com/challenges/mini-max-sum
 * @status solved
 */

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $allSums = [];
    for ($i = 0; $i < count($arr); $i++) {
        $tmpArray = $arr;
        unset($tmpArray[$i]);
        $allSums[] = array_sum($tmpArray);
    }

    print min($allSums) . ' ' . max($allSums);
}
?>