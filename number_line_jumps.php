<?php

/*
 * Complete the 'kangaroo' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER x1
 *  2. INTEGER v1
 *  3. INTEGER x2
 *  4. INTEGER v2
 */

function kangaroo($x1, $v1, $x2, $v2)
{
    // Write your code here

    if (
        $x1 >= 0 && $x1 < $x2 && $x2 <= 10000 &&
        $v1 >= 1 && $v1 <= 10000 &&
        $v2 >= 1 && $v2 <= 10000
    ) {
        $valuesAreValid = true;
    } else {
        return 'NO';
        exit();
    }

    $current_x1_loc = $x1;
    $current_x2_loc = $x2;

    $x1_jumpCount = 0;
    $x2_jumpCount = 0;

    for ($i = 1; $i <= 10000; $i++) {
        if ($current_x1_loc == $current_x2_loc && $x1_jumpCount == $x2_jumpCount) {
            return 'YES';
            break;
        } elseif ($current_x1_loc < $current_x2_loc || $x1_jumpCount < $x2_jumpCount) {
            $current_x1_loc += $v1;
            $x1_jumpCount++;
        } elseif ($current_x1_loc > $current_x2_loc || $x1_jumpCount > $x2_jumpCount) {
            $current_x2_loc += $v2;
            $x2_jumpCount++;
        }
    }

    if ($x1_jumpCount != $x2_jumpCount || $current_x1_loc != $current_x2_loc) {
        return 'NO';
    }
}
?>