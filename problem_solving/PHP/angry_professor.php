<?php

/**
 * @title Angry Professor
 * @link https://www.hackerrank.com/challenges/angry-professor
 * @status solved
 */

// Complete the angryProfessor function below.
function angryProfessor($k, $a) {
    $needStudents = $k;
    $punctualStudents = 0;

    foreach ($a as $time) {
        if ($time <= 0) {
            $punctualStudents++;
        }
    }

    return $punctualStudents >= $needStudents ? 'NO' : 'YES';
}
?>