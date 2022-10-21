<?php

/*
 * Complete the 'acmTeam' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts STRING_ARRAY topic as parameter.
 */

function acmTeam($topic) {
    // Write your code here
     $highest = -1;
 $bestTeam = 0;
 $n = $topic;
 for ($i=0; $i < count($n) - 1; $i++) {
     for ($j=$i + 1; $j < count($n); $j++) {
         $temp = substr_count($topic[$i] | $topic[$j], "1");
         if ($temp > $highest) {
             $highest = $temp;
             $bestTeam = 1;
         } else if ($temp == $highest) {
             $bestTeam ++;
         }
     }
 }
 return [$highest,$bestTeam];


}
?>