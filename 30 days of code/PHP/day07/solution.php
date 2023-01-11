<?php

function main() {
  $array = get_input();
  $reversed = reverse($array);
  print_each($reversed);
}

function &reverse(&$array) {
  $reversed = [];
  $count = count($array);
  for ($i = 0; $i < $count; $i++) {
    $reversed[$i] = $array[ $count - $i - 1 ];
  }
  return $reversed;
}

function get_input() {
  $handle = fopen("php://stdin", "r");
  fscanf($handle, "%d", $n);
  $arr_temp = fgets($handle);
  $arr = explode(" ", $arr_temp);
  array_walk($arr, 'intval');
  return $arr;
}

function print_each($array) {
  echo implode(' ', $array) . "\n";
}

main();
