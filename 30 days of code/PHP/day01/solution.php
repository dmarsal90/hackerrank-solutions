// Declare second integer, double, and String variables.
// Read and save an integer, double, and String to your variables.
$input_int = intval(fgets($handle));
$input_dbl = doubleval(fgets($handle));
$input_str = fgets($handle);

// Print the sum of both integer variables on a new line.
printf("%d\n", $i + $input_int);

// Print the sum of the double variables on a new line.
printf("%.1f\n", $d + $input_dbl);

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
printf("%s\n", $s . $input_str);
