<?php

/**
 * @title Staircase
 * @link https://www.hackerrank.com/challenges/staircase
 * @status solved
 */

// Complete the staircase function below.
function staircase($n) {
    for ($i = 1; $i <= $n; $i++) {
        print str_pad(str_repeat('#', $i), $n, ' ', STR_PAD_LEFT) . PHP_EOL;
    }
}
?>