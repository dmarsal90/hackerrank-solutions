<?php

/*
 * Complete the 'libraryFine' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER d1
 *  2. INTEGER m1
 *  3. INTEGER y1
 *  4. INTEGER d2
 *  5. INTEGER m2
 *  6. INTEGER y2
 */

function libraryFine($d1, $m1, $y1, $d2, $m2, $y2) {
    // Write your code here
   $taxes = 0;
    if ($y1 < $y2) {
        return 0;
    } else {
        if ($y1 > $y2) {
            return $taxes += 10000 * ($y1 - $y2);
        }
    }
    if ($m1 > $m2) {
        return $taxes += ($m1 - $m2) * 500;
    }
    if ($d1 > $d2) {
        if ($m1 < $m2) {
            return 0;
        }
        return $taxes += ($d1 - $d2) * 15;
    }
    return $taxes;
}
?>