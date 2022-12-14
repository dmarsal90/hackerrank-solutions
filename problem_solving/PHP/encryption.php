<?php

/**
 * @title Encryption
 * @link https://www.hackerrank.com/challenges/encryption
 * @status solved
 */

// Complete the encryption function below.
function encryption($s)
{
    $string = preg_replace('~\W~', '', $s);
    $length = strlen($string);
    $sqrt = ceil(sqrt($length));

    $arrayOfLetters = str_split($string);
    $countOfRows = floor($length / $sqrt);

    if ($sqrt * $countOfRows <= $length) {
        $countOfRows = $sqrt;
    }

    $chunk = array_chunk($arrayOfLetters, $countOfRows);

    $str = [];
    for ($i = 0; $i < $countOfRows; $i++) {
        foreach ($chunk as $letters) {
            if (isset($letters[$i])) {
                $str[$i] .= $letters[$i];
            }
        }
    }

    return implode(' ', $str);
}
?>