<?php

/*
 * Complete the 'circularArrayRotation' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER k
 *  3. INTEGER_ARRAY queries
 */

function circularArrayRotation($a, $k, $queries) {
    // Write your code here
for ($i=0; $i < count($a); $i++) {
        $c[($i + $k) % count($a)] = $a[$i];
    }

    for ($i=0; $i < count($queries); $i++) {
        $d[$i] = $c[$queries[$i]];
    }

    return $d;
}
?>