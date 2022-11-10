<?php

/**
 * @title Jumping on the Clouds
 * @link https://www.hackerrank.com/challenges/jumping-on-the-clouds
 * @status solved
 */

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c)
{
    $steps = 0;
    $current = 0;

    foreach ($c as $k => $cloud) {
        if ($k <= $current) {
            continue;
        }

        if ($c[$current + 2] === 1) {
            $current++;
        } else {
            $current += 2;
        }

        $steps++;
    }

    return $steps;
}
?>