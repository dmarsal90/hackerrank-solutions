<?php

/**
 * @title CamelCase
 * @link https://www.hackerrank.com/challenges/camelcase
 * @status solved
 */

// Complete the camelcase function below.
function camelcase($s) {
    $wordsCount = 0;
    $splitWord = str_split($s);

    foreach ($splitWord as $k => $letter) {
        if ($k === 0 || ctype_upper($letter)) {
            $wordsCount++;
        }
    }

    return $wordsCount;
}
?>