<?php

/**
 * @title Counting Valleys
 * @link https://www.hackerrank.com/challenges/counting-valleys
 * @status solved
 */

// Complete the countingValleys function below.
function countingValleys($n, $s)
{
    $total = 0;
    $level = 0;
    $isValley = false;

    for ($i = 0; $i < $n; $i++) {
        if ($s[$i] === 'U') {
            $level++;
        } else {
            $level--;
        }

        if ($level < 0) {
            if (!$isValley) {
                $total++;
            }
            $isValley = true;
        } else {
            $isValley = false;
        }
    }

    return $total;
}

?>