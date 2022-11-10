<?php

/**
 * @title Repeated String
 * @link https://www.hackerrank.com/challenges/repeated-string
 * @status solved
 */

// Complete the repeatedString function below.
function repeatedString($s, $n)
{
    $strLength = strlen($s);

    $needLetter = 'a';
    $repeatingCount = floor($n / $strLength);

    $filteredArray = array_filter(str_split($s), function ($letter) use ($needLetter) {
        return $letter === $needLetter;
    });

    $lettersInOneString = count($filteredArray);

    $subStringCount = 0;
    if (($repeatingCount * $strLength) < $n) {
        $subString = $n - ($repeatingCount * $strLength);
        $subString = substr($s, 0, $subString);

        $substringArray = array_filter(str_split($subString), function ($letter) use ($needLetter) {
            return $letter === $needLetter;
        });

        $subStringCount = count($substringArray);
    }

    return ($lettersInOneString * $repeatingCount) + $subStringCount;
}
?>