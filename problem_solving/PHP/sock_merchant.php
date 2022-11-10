<?php

/**
 * @title Sock Merchant
 * @link https://www.hackerrank.com/challenges/sock-merchant
 * @status solved
 */

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $count = 0;
    $socks = [];
    foreach ($ar as $number) {
        $socks[$number]++;
    }

    foreach ($socks as $sock) {
        $count += floor($sock / 2);
    }

    return $count;
}
?>