<?php

/**
 * @title Electronics Shop
 * @link https://www.hackerrank.com/challenges/electronics-shop
 * @status solved
 */

/*
 * Complete the getMoneySpent function below.
 */
function getMoneySpent($keyboards, $drives, $b)
{
    rsort($keyboards);
    rsort($drives);

    $allows = [];
    foreach ($keyboards as $keyboard) {
        foreach ($drives as $drive) {
            if ($keyboard + $drive <= $b) {
                $allows[] = $keyboard + $drive;
            }
        }
    }

    return !empty($allows) ? max($allows) : -1;
}
?>