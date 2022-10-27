<?php

/**
 * @title Gemstones
 * @link https://www.hackerrank.com/challenges/gem-stones
 * @status solved
 */

// Complete the gemstones function below.
function gemstones($arr)
{
    $countOfStones = count($arr);
    $elements = [];

    foreach ($arr as $k => $stone) {
        foreach (str_split($stone) as $element) {
            if (isset($elements[$k][$element])) {
                $elements[$k][$element]++;
            } else {
                $elements[$k][$element] = 1;
            }
        }
    }

    $total = [];
    foreach ($elements as $element) {
        foreach ($element as $component => $count) {
            if (isset($total[$component])) {
                $total[$component]++;
            } else {
                $total[$component] = 1;
            }
        }
    }

    return count(array_filter($total, function ($item) use ($countOfStones) {
        return $item === $countOfStones;
    }));
}
?>