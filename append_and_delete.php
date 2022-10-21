<?php

/*
 * Complete the 'appendAndDelete' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. STRING t
 *  3. INTEGER k
 */

function appendAndDelete($s, $t, $k) {
    // Write your code here
 $clear = strlen($s) < $k;
    $cleared = false;
    while($k-- > 0){
        if((strpos($t, $s) !== 0 && !$cleared) || $clear){
            $s = substr($s, 0, strlen($s) -1);
            if($s == ""){$cleared = true; $clear = false;}
            continue;
        }
        $s .= $t[strlen($s)];
        if($s == $t) return "Yes";
    }
    return "No";
}
?>