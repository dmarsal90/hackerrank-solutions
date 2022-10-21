<?php

// Complete the catAndMouse function below.
function catAndMouse($x, $y, $z) {
 $distanceX = abs($x - $z);
    $distanceY = abs($y - $z);
    
    if ($distanceX > $distanceY)
    {
        return "Cat B";
        
    } elseif ($distanceX < $distanceY)
    {
        return "Cat A";
          
    } else 
    {
        return "Mouse C";
    }
}
?>