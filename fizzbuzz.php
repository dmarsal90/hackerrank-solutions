<?php
/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n)
{
    if (php_sapi_name() === 'cli') $lb = "\n";
    else $lb = "<br />";

    for ($n = 1; $n <= 15; $n++) {
        if ($n % 3 == 0 && $n % 5 == 0) {

            echo "FizzBuzz $lb";
        } elseif ($n % 3 == 0) {
            echo "Fizz $lb";
        } elseif ($n % 5 == 0) {
            echo "Buzz $lb";
        } else {
            echo $n . " $lb";
        }
    }
}
