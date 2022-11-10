<?php

/**
 * @title The Hurdle Race
 * @link https://www.hackerrank.com/challenges/the-hurdle-race
 * @status solved
 */

// Complete the hurdleRace function below.
function hurdleRace($k, $height) {
    $maxHeight = max($height);

    $doses = $maxHeight - $k;

    return $doses > 0 ? $doses : 0;
}
?>