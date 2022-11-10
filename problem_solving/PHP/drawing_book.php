<?php

/*
 * Complete the 'pageCount' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER p
 */

function pageCount($n, $p)
{
    // Write your code here
    return min(intval($p / 2), intval($n / 2) - intval($p / 2));
}
?>