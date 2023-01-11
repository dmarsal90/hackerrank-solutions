<?php

function main() {
  $n = get_input();
  foreach (range(1, 10) as $multiple) {
    record_multiple($n, $multiple);
  }
}

function get_input() {
  $handle = fopen("php://stdin","r");
  fscanf($handle, "%d", $n);
  return $n;
}

function record_multiple($n, $multiple) {
  $result = $n * $multiple;
  printf("%d x %d = %d\n", $n, $multiple, $result);
}

main();
