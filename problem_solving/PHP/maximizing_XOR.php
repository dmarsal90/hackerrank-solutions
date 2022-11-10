<?php

/*
 * Complete the 'maximizingXor' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER l
 *  2. INTEGER r
 */

function maximizingXor($l, $r) {
    // Write your code here
 $xored = $l ^ $r;
    $most = strlen(decbin($xored));
    $bin = '';
    for ( $i =0; $i < $most; $i++) $bin = $bin . "1";
    return bindec($bin);
}
?>