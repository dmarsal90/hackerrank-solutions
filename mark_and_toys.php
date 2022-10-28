<?php

/**
 * @title Mark and Toys
 * @link https://www.hackerrank.com/challenges/mark-and-toys
 * @status solved
 */

// Complete the maximumToys function below.
function maximumToys($prices, $k) {
    sort($prices);
    $quantity = 0;
    foreach ($prices as $price) {
        $k -= $price;
        if ($k <= 0) {
            break;
        }

        $quantity++;
    }

    return $quantity;
}
?>