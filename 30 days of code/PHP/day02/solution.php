<?php

$handle = fopen( "php://stdin", "r" );
fscanf( $handle, "%lf", $meal_cost );
fscanf( $handle, "%i", $tip_percent );
fscanf( $handle, "%i", $tax_percent );

$tip = $meal_cost * ( $tip_percent / 100 );
$tax = $meal_cost * ( $tax_percent / 100 );
$total = $meal_cost + $tip + $tax;
$total_rounded = round($total);

printf( "The total meal cost is %d dollars.\n", $total_rounded );
