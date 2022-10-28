<?php

/**
 * @title Lonely Integer
 * @link https://www.hackerrank.com/challenges/lonely-integer
 * @status solved
 */

// Complete the lonelyinteger function below.
function lonelyinteger($a) {
    $result = [];
    foreach ($a as $item) {
        if (isset($result[$item])) {
            $result[$item]++;
        } else {
            $result[$item] = 1;
        }
    }

    $result = array_filter($result, function ($item) {
        return $item % 2 !== 0;
    });

    return key($result);
}
?>