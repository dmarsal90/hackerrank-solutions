<?php

/*
 * Complete the 'birthday' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY s
 *  2. INTEGER d
 *  3. INTEGER m
 */

function birthday($s, $d, $m) {
    // Write your code here
    $count=0;
    for($i=0; $i<count($s); $i++){
        $sum = 0;
        for($j=$i; $j<$m+$i; $j++){
            $sum = $sum+$s[$j];
        }
        if($sum==$d){
            $count++;
        }
    }
    return $count;
}
?>