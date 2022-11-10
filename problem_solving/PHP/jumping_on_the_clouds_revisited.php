<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c, $k)
{
    $energy = 100;
    $i = 0;
    do {
        $energy -= $c[$i] ? 3 : 1;
        $i = ($i + $k) % count($c);
    } while ($i);

    return $energy;
}
?>