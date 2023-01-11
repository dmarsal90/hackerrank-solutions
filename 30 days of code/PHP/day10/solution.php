<?php

function main() {
  $decimal_number = parse_input();
  $binary_number = to_binary($decimal_number);
  $answer = most_consecutive_1s_in($binary_number);
  echo $answer . "\n";
}

function parse_input() {
  $handle = fopen("php://stdin", "r");
  fscanf($handle, "%d", $n);
  return $n;
}

function to_binary($decimal_number) {
  $binary = [];
  $quotient = $decimal_number;

  do {
    $remainder = $quotient % 2;
    $quotient = intdiv($quotient, 2);
    array_unshift($binary, $remainder);
  } while ($quotient != 1);

  // Include final quotient of 1.
  array_unshift($binary, 1);

  return implode("", $binary);
}

function most_consecutive_1s_in($binary_number) {
  $consecutive_1s = explode('0', $binary_number);
  $lengths = array_map('strlen', $consecutive_1s);
  return max($lengths);
}

main();
