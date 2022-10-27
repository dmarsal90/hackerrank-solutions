<?php

/**
 * @title Find the Median
 * @link https://www.hackerrank.com/challenges/find-the-median
 * @status solved
 */

// Complete the findMedian function below.
function findMedian($arr)
{
    sort($arr);
    $middle = floor(count($arr) / 2);

    return $arr[$middle];
}
?>