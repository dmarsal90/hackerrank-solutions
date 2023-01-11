<?php

function parse_input() {
  $handle = fopen("php://stdin", "r");

  fscanf($handle, "%d", $n);

  $a_temp = fgets($handle);
  $a = explode(" ", $a_temp);
  $a = array_map('intval', $a);

  return $a;
}


function bubble_sort(&$a) {
  $total_swaps = 0;

  $n = count($a);
  for ($i = 0; $i < $n; $i++) {
    $iteration_swaps = 0;
    for ($j = 0; $j < $n - 1; $j++) {
      list ($x, $y) = [$a[$j], $a[$j + 1]];
      if ($x > $y) {
        $a[$j] = $y;
        $a[$j + 1] = $x;
        $iteration_swaps++;
      }
    }

    if ($iteration_swaps == 0) {
      break;
    }

    $total_swaps += $iteration_swaps;
  }

  return $total_swaps;
}


$a = parse_input();
$swaps = bubble_sort($a);

echo "Array is sorted in $swaps swaps.\n";
echo "First Element: {$a[0]}\n";
echo "Last Element: {$a[count($a) - 1]}\n";
