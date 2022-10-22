<?php

/*
 * Complete the 'cutTheSticks' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function cutTheSticks($arr)
{
    // Write your code here
    $countarr = array();
    while (sizeof($arr) > 0) {

        $smallest = smallerStick($arr);
        $count = 0;
        $newarr = array();

        // Cut stics
        foreach ($arr as $key => $value) {
            $remain = $value - $smallest;

            // count cutted stick number
            $count++;

            if ($remain > 0) {
                $newarr[] = $value;
            }
        }

        $arr = $newarr;
        $countarr[] = $count;
    }

    return $countarr;
}

function smallerStick($arr)
{
    $smaller = $arr[0];
    foreach ($arr as $value) {
        if ($value > 0 && $value < $smaller) {
            $smaller = $value;
        }
    }

    return $smaller;
}
?>