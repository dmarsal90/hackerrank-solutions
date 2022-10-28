<?php

/**
 * @title Migratory Birds
 * @link https://www.hackerrank.com/challenges/migratory-birds
 * @status solved
 */

// Complete the migratoryBirds function below.
function migratoryBirds($arr) {
    $birds = [];
    foreach ($arr as $bird) {
        if (isset($birds[$bird])) {
            $birds[$bird]++;
        } else {
            $birds[$bird] = 1;
        }
    }

    ksort($birds);

    return array_search(max($birds), $birds, false);
}
?>