<?php

/*
 * Complete the 'squares' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER a
 *  2. INTEGER b
 */

function squares($a, $b) {
    // Write your code here
$totalSqrt = 0;    
    $sqrt = -1.1; 
    $n=$a;
    
    while((int)$sqrt != $sqrt && $n<=$b) {
        $sqrt=sqrt($n);
        $n++;        
    }
    if((int)$sqrt == $sqrt) {
        $n--;
        $totalSqrt++;        
    }   
    
    if($n<$b) {
        while($n<=$b){
            $nextSqrtStep = $sqrt * 2;
            $n = ($n + $nextSqrtStep) +1;            
            if($n<=$b) {
                $sqrt++;
                $totalSqrt++;                            
            }            
        }
    }    
    return $totalSqrt;
}
?>