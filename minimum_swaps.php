<?php

// Complete the minimumSwaps function below.
function minimumSwaps($arr)
{
    $sortedArr = $arr;
    sort($sortedArr);

    $countSwap = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] != $sortedArr[$i]) {
            $indexSwap = $arr[$i] - 1;

            $tmp = $arr[$i];
            $arr[$i] = $arr[$indexSwap];
            $arr[$indexSwap] = $tmp;

            $i--;
            $countSwap++;
        }
    }

    return $countSwap;
}

?>