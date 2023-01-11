<?php

function main() {
  list( $phone_book, $queries ) = get_input();
  $results = lookup($queries, $phone_book);
  print_results($results);
}

function lookup($queries, $phone_book) {
  $results = [];
  foreach ($queries as $name) {
    $results[] = [
      'name' => $name,
      'number' => get_or_default($name, $phone_book),
    ];
  }
  return $results;
}

function get_or_default($key, $array, $default = NULL) {
  if (array_key_exists($key, $array)) {
    return $array[$key];
  } else {
    return $default;
  }
}

function print_results($results) {
  foreach ($results as $result) {
    if ($result['number'] === NULL) {
      echo "Not found\n";
    } else {
      printf("%s=%d\n", $result['name'], $result['number']);
    }
  }
}

function get_input() {
  $handle = fopen("php://stdin", "r");
  $phone_book = get_phone_book($handle);
  $queries = get_queries($handle);
  return [$phone_book, $queries];
}

function get_phone_book($handle) {
  $phone_book = [];

  fscanf($handle, "%d", $entry_count);
  foreach (range(1, $entry_count) as $i) {
    fscanf($handle, "%s %d", $name, $number);
    $phone_book[$name] = $number;
  }

  return $phone_book;
}

function get_queries($handle) {
  $queries = [];
  while ( ($line = fgets($handle)) !== false ) {
    $queries[] = trim($line);
  }
  return $queries;
}

main();
