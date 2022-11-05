<?php

/*
 * Complete the 'sumXor' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */

function sumXor($n) {
    // Write your code here
$c = 0;
    while($n){
        if(($n&1)==0)
        $c++;
        $n = $n>>1;
    }
    return pow(2,$c);
}
?>