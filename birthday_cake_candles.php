<?php

/**
 * @title Birthday Cake Candles
 * @link https://www.hackerrank.com/challenges/birthday-cake-candles
 * @status solved
 */

// Complete the birthdayCakeCandles function below.
function birthdayCakeCandles($ar) {
    $maxHeight = max($ar);

    $candles = array_filter($ar, function ($item) use ($maxHeight) {
        return $item === $maxHeight;
    });

    return count($candles);
}

?>