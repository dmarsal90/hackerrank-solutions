<?php

// Complete the xorSequence function below.
function xorSequence($l, $r) {
$diff =0;
        $ans=0;
        $k = 0;

        if(($l+1)%4==0) $diff=1;
        if(($l+2)%4==0) $diff=2;
        if(($l+3)%4==0) $diff=3;
        
        while($diff-->0) {
            $k = value($l++);
            $ans^=$k;
        }

        $diff=($r-$l+1)%8;

        while($diff-->0){
            $k = value($r--);
            $ans^=$k;
        }
        return $ans;
    }
    function value($i){
        if($i%4 == 0) return $i;
        if($i%4 == 1) return 1;
        if($i%4 == 2) return $i+1;
        return 0;
}

?>