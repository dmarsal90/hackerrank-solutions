<?php

/**
 * @title Missing Numbers
 * @link https://www.hackerrank.com/challenges/missing-numbers
 * @status solved
 */

// Complete the missingNumbers function below.
function missingNumbers($arr, $brr)
{
    $acount = [];
    foreach ($arr as $number) {
        if (isset($acount[$number])) {
            $acount[$number]++;
        } else {
            $acount[$number] = 1;
        }
    }

    $bcount = [];
    foreach ($brr as $number) {
        if (isset($bcount[$number])) {
            $bcount[$number]++;
        } else {
            $bcount[$number] = 1;
        }
    }

    $result = [];
    foreach ($acount as $number => $count) {
        if (!isset($bcount[$number]) || $bcount[$number] !== $count) {
            $result[$number] = $number;
        }
    }

    foreach ($bcount as $number => $count) {
        if (!isset($acount[$number]) || $acount[$number] !== $count) {
            $result[$number] = $number;
        }
    }

    sort($result);

    return $result;
}
?>