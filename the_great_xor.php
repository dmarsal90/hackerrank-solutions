<?php

/*
 * Complete the 'theGreatXor' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER x as parameter.
 */

function theGreatXor($x) {
    // Write your code here
$r = 0;
    $mask = 1;
    while ($mask < $x)
    {
        if (($mask & $x) == 0)
            $r += $mask;
        $mask <<= 1;
    }

    return $r;
}
?>