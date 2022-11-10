<?php

/**
 * @title Alternating Characters
 * @link https://www.hackerrank.com/challenges/alternating-characters
 * @status solved
 */

// Complete the alternatingCharacters function below.
function alternatingCharacters($s) {
    $arrayOfLetters = str_split($s);
    $countOfRemoving = 0;

    for ($i = 1; $i < count($arrayOfLetters); $i++) {
        if ($arrayOfLetters[$i - 1] === $arrayOfLetters[$i]) {
            $countOfRemoving++;
        }
    }

    return $countOfRemoving;
}
?>