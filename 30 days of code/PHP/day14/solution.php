<?php

class Difference{
    private $elements=array();
    public $maximumDifference;

    public function __construct($ints) {
        $this->elements = $ints;
    }

    public function ComputeDifference() {
        $this->maximumDifference = max($this->AbsoluteDifferences());
    }

    private function AbsoluteDifferences() {
        $differences = [];
        foreach ($this->elements as $x) {
            foreach ($this->elements as $y) {
                $differences[] = abs($x - $y);
            }
        }
        return $differences;
    }

} //End of Difference class


$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>
