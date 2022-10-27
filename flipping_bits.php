<?php

/**
 * @title Flipping bits
 * @link https://www.hackerrank.com/challenges/flipping-bits
 * @status solved
 */

// Complete the flippingBits function below.
function flippingBits($n)
{
    return $n ^ 0xFFFFFFFF;
}
?>