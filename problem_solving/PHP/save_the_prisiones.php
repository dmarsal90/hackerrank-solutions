<?php

/**
 * @title Save the Prisoner!
 * @link https://www.hackerrank.com/challenges/save-the-prisoner
 * @status solved
 */

// Complete the saveThePrisoner function below.
function saveThePrisoner($n, $m, $s) {
    return ((($s + $m - 2) % $n) + 1);
}
?>