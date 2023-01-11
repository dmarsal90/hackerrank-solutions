<?php

function parse_input($handle) {
    list ($n) = fscanf($handle, '%d');
    foreach (range(1, $n) as $i) {
        list ($name, $email) = fscanf($handle, '%s %s');
        yield ['name' => $name, 'email' => $email];
    }
}

function gmail_contacts($all_contacts) {
    foreach ($all_contacts as $contact) {
        if (is_gmail_address($contact['email'])) {
            yield $contact;
        }
    }
}

function is_gmail_address($email) {
    return preg_match('/.*@gmail\.com/', $email) == 1;
}

function contact_names($contacts) {
    foreach ($contacts as $c) {
        yield $c['name'];
    }
}

function to_array($iter) {
    $a = [];
    foreach ($iter as $each) {
        $a[] = $each;
    }
    return $a;
}

function sorted($a) {
    sort($a);
    return $a;
}

function print_each($xs) {
    foreach ($xs as $x) {
        echo $x . PHP_EOL;
    }
}

function pipeline($input, $fs) {
    $next_input = $input;
    foreach ($fs as $f) {
        $next_input = call_user_func($f, $next_input);
    }
    return $next_input;
}

$handle = fopen('php://stdin', 'r');
pipeline(
    parse_input($handle),
    [
        'gmail_contacts',
        'contact_names',
        'to_array',
        'sorted',
        'print_each',
    ]
);
