<?php

function solve($s, $k) {
    $max = 0;
    for ($i = 0; $i < count($s); $i++) {
        for ($j = $i + 1; $j < count($s); $j++) {
            $a = $s[$i];
            $b = $s[$j];
            $r = $a & $b;
            if ($r < $k) {
                $max = max($max, $r);
            }
        }

        // Stop if we've found a $max that's $k - 1,
        // since it won't be possible to find a larger $max.
        if ($max == $k - 1) {
            return $max;
        }
    }
    return $max;
}

function parse_input($handle) {
    list ($n) = fscanf($handle, '%d');
    foreach (range(1, $n) as $i) {
        list ($n, $k) = fscanf($handle, '%d %d');
        yield ['s' => range(1, $n), 'k' => $k];
    }
}

$handle = fopen('php://stdin', 'r');
foreach (parse_input($handle) as $case) {
    echo solve($case['s'], $case['k']) . PHP_EOL;
}
