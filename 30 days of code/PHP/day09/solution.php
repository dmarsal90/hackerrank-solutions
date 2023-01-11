<?php

function main() {
  $n = get_input();
  $f = factorial($n);
  print_result($f);
}

function factorial($n) {
  if ($n == 1) {
    return 1;
  }
  return $n * factorial($n - 1);
}

function get_input() {
  $handle = fopen("php://stdin", "r");
  fscanf($handle, "%i", $n);
  fclose($handle);
  return $n;
}

function print_result($factorial) {
  echo $factorial . "\n";
}

main();
