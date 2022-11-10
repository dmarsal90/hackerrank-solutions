<?php

/**
 * @title Apple and Orange
 * @link https://www.hackerrank.com/challenges/apple-and-orange
 * @status solved
 */

// Complete the countApplesAndOranges function below.
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $total = ['apples' => 0, 'oranges' => 0];

    foreach ($apples as $apple) {
        $distance = $a + $apple;
        if ($distance >= $s && $distance <= $t) {
            $total['apples']++;
        }
    }
    foreach ($oranges as $orange) {
        $distance = $b + $orange;
        if ($distance >= $s && $distance <= $t) {
            $total['oranges']++;
        }
    }

    echo implode(PHP_EOL, $total);
}
?>