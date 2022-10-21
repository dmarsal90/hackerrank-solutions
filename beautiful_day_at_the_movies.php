<?php

/**
 * @title Beautiful Days at the Movies
 * @link https://www.hackerrank.com/challenges/beautiful-days-at-the-movies
 * @status solved
 */

// Complete the beautifulDays function below.
function beautifulDays($i, $j, $k) {
    $count = 0;
    for ($day = $i; $day <= $j; $day++) {
        $first = $day;
        $second = implode('', array_reverse(str_split($day)));

        if (is_integer(($first - $second) / $k)) {
            $count++;
        }
    }

    return $count;
}
?>