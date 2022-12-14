<?php

/*
 * Complete the 'pickingNumbers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function pickingNumbers($a)
{
    // Write your code here
    $array = [];
    foreach ($a as $b) {
        $array[$b] = ($array[$b] ?? 0) + 1;
    }

    ksort($array);
    $keys = array_keys($array);
    $max = $array[$keys[0]];
    for ($x = 0, $l = count($keys) - 1; $x < $l; $x++) {
        $key1 = $keys[$x];
        $key2 = $keys[$x + 1];
        $sum = $array[$key1] + ($key1 + 1 == $key2 ? $array[$key2] : 0);

        if ($max < $sum) {
            $max = $sum;
        }
    }

    return $max;
}
?>