<?php
class Person {

    public $age;

    public function __construct($initialAge) {
        $this->age = $initialAge;
        if ($initialAge < 0) {
            $this->report('Age is not valid, setting age to 0.');
            $this->age = 0;
        }
    }

    public function amIOld() {
        $age = $this->age;

        if ($age < 13) {
            $this->report('You are young.');
        }
        elseif ($age < 18) {
            $this->report('You are a teenager.');
        }
        else {
            $this->report('You are old.');
        }
    }

    public  function yearPasses() {
        $this->age += 1;
    }

    private function report($message) {
        printf("%s\n", $message);
    }

}
