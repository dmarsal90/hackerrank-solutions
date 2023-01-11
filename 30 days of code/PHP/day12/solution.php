<?php

class person {
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

class Student extends person {
    private $scoreList;

    /*
     *   Class Constructor
     *
     *   Parameters:
     *   firstName - A string denoting the Person's first name.
     *   lastName - A string denoting the Person's last name.
     *   id - An integer denoting the Person's ID number.
     *   scores - An array of integers denoting the Person's test scores.
     */
    public function __construct($firstName, $lastName, $id, $scores) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $id;
        $this->scoreList = new ScoreList($scores, GradeScale::getDefault());
    }

    /*
     *   Function Name: calculate
     *   Return: A character denoting the grade.
     */
    public function calculate() {
        return $this->scoreList->getAverageLetterGrade();
    }
}


class ScoreList {
    private $scores;
    private $gradeScale;

    public function __construct($scores, $gradeScale) {
        $this->scores = $scores;
        $this->gradeScale = $gradeScale;
    }

    public function getAverageNumericGrade() {
        if (count($this->scores) == 0) return 0;
        return array_sum($this->scores) / count($this->scores);
    }

    public function getAverageLetterGrade() {
        $average = $this->getAverageNumericGrade();
        return $this->gradeScale->letterForGrade($average);
    }
}


class GradeScale {

    public static function getDefault() {
        $scale = new GradeScale();
        $scale->addCriterion(['minimumGrade' =>  0, 'maximumGrade' =>  39, 'letter' => 'T']);
        $scale->addCriterion(['minimumGrade' => 40, 'maximumGrade' =>  54, 'letter' => 'D']);
        $scale->addCriterion(['minimumGrade' => 55, 'maximumGrade' =>  69, 'letter' => 'P']);
        $scale->addCriterion(['minimumGrade' => 70, 'maximumGrade' =>  79, 'letter' => 'A']);
        $scale->addCriterion(['minimumGrade' => 80, 'maximumGrade' =>  89, 'letter' => 'E']);
        $scale->addCriterion(['minimumGrade' => 90, 'maximumGrade' => 100, 'letter' => 'O']);
        return $scale;
    }

    private $criteria;

    public function __construct() {
        $criteria = [];
    }

    public function addCriterion($criterion) {
        $this->criteria[] = [
            $criterion['minimumGrade'],
            $criterion['maximumGrade'],
            $criterion['letter'],
        ];
    }

    public function letterForGrade($grade) {
        $letterGrade = '';
        foreach ($this->criteria as list ($minimumGrade, $maximumGrade, $letter)) {
            if ($grade >= $minimumGrade && $grade <= $maximumGrade) {
                $letterGrade = $letter;
            }
        }
        return $letterGrade;
    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");
