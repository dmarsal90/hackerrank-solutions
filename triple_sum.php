<?php

// Complete the triplets function below.
function triplets($a, $b, $c) {
    sort($a);
    sort($b);
    sort($c);
     
    $i = 0; $j = 0; $k = 0;
    $sol=0;
    
    while($i < count($b)){
        while($a[$j]<=$b[$i] && $j<count($a)){
            $j++;
            }
        while($c[$k]<=$b[$i] && $k<count($c)){
            $k++;
            }
        $sol+= $j*$k;
        $i++;
    }
    return $sol;

}
?>