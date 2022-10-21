<?php

/*
 * Complete the 'bonAppetit' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY bill
 *  2. INTEGER k
 *  3. INTEGER b
 */

function bonAppetit($bill, $k, $b) {
    // Write your code here
unset($bill[$k]);
    $actual = round(array_sum($bill)/2);
    $amountToReturn = $b - $actual;
    echo $amountToReturn > 0 ? $amountToReturn : 'Bon Appetit';
}
?>