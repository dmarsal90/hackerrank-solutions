<?php

function print_test_cases($cases) {
    printf("%d\n", count($cases));
    foreach ($cases as $case) {
        print_test_case($case);
    }
}

function print_test_case($case) {
    printf("%d %d\n", $case['students'], $case['threshold']);
    printf("%s\n", implode(' ', $case['arrival_delays']));
}

print_test_cases([
    /* YES */ ['students' => 3, 'threshold' => 3, 'arrival_delays' => [-1, 0, 1]],
    /* NO  */ ['students' => 4, 'threshold' => 1, 'arrival_delays' => [2, 1, -3, 0]],
    /* YES */ ['students' => 5, 'threshold' => 4, 'arrival_delays' => [-1, 0, 1, 2, 3]],
    /* NO  */ ['students' => 6, 'threshold' => 1, 'arrival_delays' => [-2, -1, 0, 1, 2, 3]],
    /* YES */ ['students' => 7, 'threshold' => 7, 'arrival_delays' => [-3, -2, -1, 0, 1, 2, 3]],
]);
