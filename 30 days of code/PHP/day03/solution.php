<?php

function input() {
    $handle = fopen( "php://stdin", "r" );
    fscanf( $handle, "%d", $n );
    return $n;
}

function output( $judgement ) {
    printf( "%s\n", $judgement );
}

function is_odd( $n ) {
    return $n % 2 != 0;
}

function judge_number( $n ) {
    if( is_odd( $n ) ) {
        return 'Weird';
    }

    if( $n >= 2 && $n <= 5 ) {
        return 'Not Weird';
    }

    if( $n >= 6 && $n <= 20 ) {
        return 'Weird';
    }

    return 'Not Weird';
}

output( judge_number( input() ) );
