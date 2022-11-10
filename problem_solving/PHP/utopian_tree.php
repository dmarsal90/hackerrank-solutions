<?php

/*
 * Complete the 'utopianTree' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function utopianTree($n) {
    // Write your code here
$h = 1;
    
    if ( $n == 0) {
        
        return 1;
        
    } else {
        
        $i = 0;       
        do {
            if ($i % 2 == 0) {
                $h *= 2;
                $i++;
            } else {
                $h += 1;
                $i++;
            }
        } while ($i < $n);
        
        return $h;
        
    } 
}
?>