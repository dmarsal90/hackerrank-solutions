<?php

function main() {
  $strings = get_input();
  $even_odd_strings = array_map('split_even_odd', $strings);
  array_map('print_even_odd', $even_odd_strings);
}

function split_even_odd($string) {
  $even_chars = [];
  $odd_chars = [];
  $chars = str_split($string);

  foreach (range(0, count($chars) - 1) as $index) {
    if(is_even($index)) {
      $even_chars[] = $chars[$index];
    } else {
      $odd_chars[] = $chars[$index];
    }
  }

  return [
    'evens' => $even_chars,
    'odds' => $odd_chars
  ];
}

function is_even($int) {
  return $int % 2 == 0;
}

function get_input() {
  $handle = fopen("php://stdin", "r");
  fscanf($handle, "%d", $string_count);

  $strings = [];
  foreach (range(1, $string_count) as $i) {
    fscanf($handle, "%s", $string);
    $strings[] = $string;
  }

  return $strings;
}

function print_even_odd($even_odd_split) {
  $evens = implode("", $even_odd_split['evens']);
  $odds = implode("", $even_odd_split['odds']);
  printf("%s %s\n", $evens, $odds);
}

main();
