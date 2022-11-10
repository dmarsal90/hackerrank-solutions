<?php

/*
 * Complete the 'extraLongFactorials' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function extraLongFactorials($n)
{
    // Write your code here
    $factorial = factorial($n);
    echo $factorial;
}

function factorial($n)
{
    if ($n == 1) return 1;
    return bcmul($n, factorial($n - 1));
}
?>