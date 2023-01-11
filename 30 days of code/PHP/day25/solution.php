<?php

class Solution {

    private $input;
    private $formatter;

    public function __construct($input, $formatter) {
        $this->input = $input;
        $this->formatter = $formatter;
    }

    public function print_results() {
        $this->input->each_line(function($n) {
            $this->formatter->print($n);
        });
    }

    public function print_range($start, $end) {
        foreach (range($start, $end) as $n) {
            echo $n . ' is ';
            $this->formatter->print($n);
        }
    }

}


class StdIn {

    private $handle;
    private $input_count;

    public function __construct() {
        $this->handle = fopen("php://stdin", "r");
        $this->input_count = $this->read_int();
    }

    public function each_line($func) {
        $line_num = 1;
        while ($line_num <= $this->input_count) {
            $line_num += 1;
            $func( $this->read_int() );
        }
    }

    private function read_int() {
        list ($n) = fscanf($this->handle, "%d");
        return $n;
    }

}


class PrimeNumberFormatter {

    private $computer;

    public function __construct($computer) {
        $this->computer = $computer;
    }

    public function print($n) {
        echo $this->format($n) . PHP_EOL;
    }

    private function format($n) {
        if ($this->computer->is_prime($n)) {
            return "Prime";
        }
        else {
            return "Not prime";
        }
    }

}


class TrialDivisionPrimeNumberComputer {

    public function is_prime($n) {
        // Handle special cases first.
        if ($n == 1) return false;
        if ($n == 2) return true;

        // If $n is even, it cannot be prime.
        if ($n % 2 == 0) return false;

        // Now that we know $n is not even,
        // we can skip all even numbers
        // and check only the odds
        // from 3 to the square root of $n.
        $sr = ceil(sqrt($n));
        for ($d = 3; $d <= $sr; $d += 2) {
            if ($n % $d == 0) {
                return false;
            }
        }

        // If we got here, congrats!
        // We've got a prime number.
        return true;
    }

}


$input = new StdIn();
$computer = new TrialDivisionPrimeNumberComputer();
$formatter = new PrimeNumberFormatter($computer);
$solution = new Solution($input, $formatter);

$solution->print_results();
