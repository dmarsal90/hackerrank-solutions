<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $string);

// This is a bad exercise in PHP.
// None of the PHP conversation methods throw an exception.
// So here's a hack.
echo ['Bad String', $string][(int)is_numeric($string)];
