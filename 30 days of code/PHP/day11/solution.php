<?php

// --------------------------------------------------------------------
// I/O

function parse_input() {
  $handle = fopen("php://stdin", "r");
  $matrix = array();
  for ($i = 0; $i < 6; $i++) {
    $line = fgets($handle);
    $matrix[] = explode(" ", trim($line));
    array_walk($matrix[$i], 'intval');
  }
  return $matrix;
}

// NOTE:
// This function isn't used for the computation,
// but it's very useful for debugging
// so I left it in.
function print_hourglasses($hourglasses) {
  $lines = array_chunk($hourglasses, 4);
  foreach ($lines as $line) {
    // First line
    foreach ($line as $hourglass) {
      printf("%s   ", implode(" ", array_slice($hourglass, 0, 3)));
    }
    echo "\n";

    // Second line
    foreach ($line as $hourglass) {
      printf("  %s     ", implode(" ", array_slice($hourglass, 3, 1)));
    }
    echo "\n";

    // Third line
    foreach ($line as $hourglass) {
      printf("%s   ", implode(" ", array_slice($hourglass, 4, 3)));
    }
    echo "\n\n";
  }
}

// --------------------------------------------------------------------
// Computations

function find_all_hourglasses($matrix) {
  $hourglasses = [];
  foreach (range(0, 3) as $starting_row_index) {
    foreach (range(0, 3) as $starting_column_index) {
      $hourglass = [];
      $hourglass[] = $matrix[ $starting_row_index][ $starting_column_index ];
      $hourglass[] = $matrix[ $starting_row_index][ $starting_column_index + 1 ];
      $hourglass[] = $matrix[ $starting_row_index][ $starting_column_index + 2 ];
      $hourglass[] = $matrix[ $starting_row_index + 1][ $starting_column_index + 1 ];
      $hourglass[] = $matrix[ $starting_row_index + 2][ $starting_column_index ];
      $hourglass[] = $matrix[ $starting_row_index + 2][ $starting_column_index + 1 ];
      $hourglass[] = $matrix[ $starting_row_index + 2][ $starting_column_index + 2 ];
      $hourglasses[] = $hourglass;
    }
  }
  return $hourglasses;
}

// --------------------------------------------------------------------
// Main

$matrix = parse_input();
$hourglasses = find_all_hourglasses($matrix);
$hourglass_sums = array_map('array_sum', $hourglasses);
echo max($hourglass_sums) . "\n";
