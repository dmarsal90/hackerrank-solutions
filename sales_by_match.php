<?php

/*
 * Complete the 'sockMerchant' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY ar
 */

function sockMerchant($n, $ar) {
    // Write your code here
$count = 0;
    for ($i = 0; $i < $n; $i++) {
        if ( $ar[$i] != 0 ) {
            for ( $j = $i + 1; $j < $n; $j++ ) {
                if ( $ar[$i] == $ar[$j] ) {
                    $count++;
                    $ar[$j] = 0;
                    break;
                }
            }
        }
    }
    return $count;
}
?>