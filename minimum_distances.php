<?php

/**
 * @title Minimum Distances
 * @link https://www.hackerrank.com/challenges/minimum-distances
 * @status solved
 */

// Complete the minimumDistances function below.
function minimumDistances($a) {
    $result = [];
    foreach ($a as $k => $number) {
        $result[$number][] = $k;
    }

    $min = -1;
    foreach ($result as $line) {
        if (count($line) !== 2) {
            continue;
        }
        $l = abs($line[0] - $line[1]);
        if ($min < 0 || $l < $min) {
            $min = $l;
        }
    }

    return $min;
}
?>