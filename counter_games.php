<?php

/*
 * Complete the 'counterGame' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts LONG_INTEGER n as parameter.
 */

function counterGame($n)
{
    // Write your code here
    $S = "Richard";
    while ($n != 1) {
        if (ceil(log($n)) == floor(log($n))) {
            $n /= 2;
            $S = $S == "Louise" ? "Richard" : "Louise";
        } else {
            $i = 0;
            while (pow(2, $i) < $n) {
                $i++;
            }
            $n -= pow(2, $i - 1);
            $S = $S == "Louise" ? "Richard" : "Louise";
        }
    }
    return $S;
}
?>