<?php

/*
 * Complete the 'permutationEquation' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY p as parameter.
 */

function permutationEquation($p) {
    // Write your code here
    $size = sizeof($p);
    $i = 0;

    $result = array();
    while(++$i <= $size)
    {
        $f = 0;

        while ($p[$f] != $i){
            $f++;
        }

        $f++;
        $y = 0;
        while ($p[$y] != $f){
            $y++;
        }

        $result[$i-1] = ($y+1);
    }

    return $result;

}
?>