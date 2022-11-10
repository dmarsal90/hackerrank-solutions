<?php

/*
 * Complete the 'hurdleRace' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY height
 */

function hurdleRace($k, $height)
{
    // Write your code here
    $doses = "";

    if ($k >= max($height)) {
        $doses = 0;
        return abs($doses);
    } else {
        $doses = $k - max($height);
        return abs($doses);
    }
}
?>