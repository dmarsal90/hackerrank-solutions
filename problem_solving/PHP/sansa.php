<?php

/*
 * Complete the 'sansaXor' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function sansaXor($arr) {
    // Write your code here
    $l = count($arr)   ;
    $result = 0;
    if($l%2 == 0) return 0;
    for($i = 0; $i<$l; $i+=2)
        $result ^= $arr[$i];
    return $result   ;
}
?>