<?php

/**
 * @title Halloween Sale
 * @link https://www.hackerrank.com/challenges/halloween-sale
 * @status solved
 */

// Complete the howManyGames function below.
function howManyGames($p, $d, $m, $s)
{
    $games = 0;
    $money = $s;

    for ($i = $p; $i >= 0; $i -= $d) {
        if ($i >= $m && $money > 0) {
            $money -= $i;
            $games++;
        }
    }

    $games += floor($money / $m);

    return $games > 0 ? $games : 0;
}
?>
