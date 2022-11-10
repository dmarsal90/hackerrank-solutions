<?php

/**
 * @title Breaking the Records
 * @link https://www.hackerrank.com/challenges/breaking-best-and-worst-records
 * @status solved
 */

// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $currentMaxScore = 0;
    $currentMinScore = 0;

    $totalMaxScores = 0;
    $totalMinScores = 0;

    foreach ($scores as $k => $score) {
        if ($k === 0) {
            $currentMaxScore = $score;
            $currentMinScore = $score;
        }

        if ($score > $currentMaxScore) {
            $currentMaxScore = $score;
            if ($k > 0) {
                $totalMaxScores++;
            }
        }

        if ($score < $currentMinScore) {
            $currentMinScore = $score;
            if ($k > 0) {
                $totalMinScores++;
            }
        }
    }

    return [$totalMaxScores, $totalMinScores];
}
?>