<?php

/*
 * Complete the 'viralAdvertising' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function viralAdvertising($n) {
    // Write your code here
 $recepients = 5;
    $cumul = 0;
    while($n-- >= 1){
        $liked = floor($recepients/2);
        $cumul += $liked;
        $recepients = $liked * 3;
    }
    return $cumul;
}
?>