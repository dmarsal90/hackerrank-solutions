<?php
interface AdvancedArithmetic{
    public function divisorSum($n);
}

// BEGIN MY CODE

class Calculator implements AdvancedArithmetic {
    public function divisorSum($n) {
        return array_sum(divisors_of($n));
    }
}


function divisors_of($n) {
    $d = [];
    foreach (range(1, $n) as $i) {
        if ($n % $i == 0) {
            $d[] = $i;
        }
    }
    return $d;
}

// END MY CODE

$n=intval(fgets(STDIN));
$myCalculator=new Calculator();
if($myCalculator instanceof AdvancedArithmetic)//checking if Calculator has implemented AdvancedArithemtic
{
    $sum=$myCalculator->divisorSum($n);
    echo "I implemented: AdvancedArithmetic\n".$sum;
}
else
{
    echo "Wrong answer";// You will get this output if you dont implement
}
?>
