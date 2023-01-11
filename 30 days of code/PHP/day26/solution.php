<?php

function late_fee($expected, $actual) {
    $years_late = $actual['year'] - $expected['year'];
    if ($years_late > 0) {
        return 10000;
    }
    else if ($years_late == 0) {
        $months_late = $actual['month'] - $expected['month'];
        if ($months_late > 0) {
            return 500 * $months_late;
        }
        else if ($months_late == 0) {
            $days_late = $actual['day'] - $expected['day'];
            if ($days_late > 0) {
                return 15 * $days_late;
            }
        }
    }
    return 0;
}

function parse_input($handle) {
    $actual = parse_next_date($handle);
    $expected = parse_next_date($handle);
    return [$actual, $expected];
}

function parse_next_date($handle) {
    list ($d, $m, $y) = fscanf($handle, "%d %d %d");
    return ['year' => $y, 'month' => $m, 'day' => $d];
}

$stdin = fopen("php://stdin", "r");
list ($actual, $expected) = parse_input($stdin);
echo late_fee($expected, $actual) . PHP_EOL;
