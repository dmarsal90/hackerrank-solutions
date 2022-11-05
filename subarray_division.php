<?php

/*
 * Complete the 'birthday' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY s
 *  2. INTEGER d
 *  3. INTEGER m
 */

function birthday($s, $d, $m) {
    // Write your code here
$max_length = count($s);

$initial_check = 0;
$number_of_divide = 0;
$final_check = $initial_check + $m - 1;

while($final_check < $max_length) { $sum_of_chocolate=0; for ($check_segment_index=$initial_check; $check_segment_index <=$final_check; $check_segment_index++) { $sum_of_chocolate +=$s[$check_segment_index]; if ($sum_of_chocolate==$d && $final_check==$check_segment_index) { // total chocolate equal day of summing chocolate // the contiguous length is equal month $number_of_divide++; } if ($sum_of_chocolate> $d) {
    // too much chocolate
    break;
    }
    }

    // find the next chocolate segment
    $initial_check++;
    $final_check = $initial_check + $m - 1;
    }


    return $number_of_divide;
}
?>