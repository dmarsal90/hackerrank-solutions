<?php

/**
 * @title Grading Students
 * @link https://www.hackerrank.com/challenges/grading
 * @status solved
 */

/*
 * Complete the gradingStudents function below.
 */
function gradingStudents($grades)
{
    $final = [];
    foreach ($grades as $grade) {
        if ($grade % 5 === 0) {
            $final[] = $grade;
        } else {
            $nextGrade = ceil($grade / 5) * 5;
            if (($nextGrade - $grade) >= 3 || $grade < 38) {
                $final[] = $grade;
            } else {
                $final[] = $nextGrade;
            }
        }
    }

    return $final;
}
?>