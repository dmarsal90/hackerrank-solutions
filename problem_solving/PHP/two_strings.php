<?php

/**
 * @title Two Strings
 * @link https://www.hackerrank.com/challenges/two-strings
 * @status solved
 */

// Complete the twoStrings function below.
function twoStrings($s1, $s2) {
    $s1 = str_split($s1);
    $s2 = str_split($s2);


    return count(array_intersect($s1, $s2)) > 0 ? 'YES' : 'NO';
}
?>