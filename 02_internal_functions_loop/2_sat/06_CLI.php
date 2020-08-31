<?php
// CLI - Command Line Interface
// Using command line to execute scripts
// Where you used /.hooli start, enter ./hooli console
// using ls and cd navigate to current php file directory

//Two variables are defined right away: $argv and $argc
print_r($argv); // array always has the minimum length of 1. $argv[0] is file name
print_r($argc);
echo PHP_EOL;

// try entering php (filename) test
print_r($argv);
print_r($argc);
echo PHP_EOL;

// Any difference? The rest are arguments.
//This two variables can also be accessed as superglobal variable under $_SERVER['argv'] and $_SERVER['argc'] (more on Friday)

// Task: Create index array with days of the week (Monday, ... Sunday)
// based on numerical input argument (0 being Monday),
// output the day of week from array, implement check if number exists in array with isset().
// if input is not number, output the error: 'Please use number lesser than 7 as argument'

$days = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];
if (isset($days[$argv[1]])) {
    echo $days[$argv[1]];


//    file_put_contents('test-file.txt', 'Day: ' . $days[$argv[1]], FILE_APPEND);
//    $textFromFile = file_get_contents('test-file.txt');
//    echo $textFromFile;
} else {
    echo 'Please use number lesser than 7 as argument';
}

// When logic without frontend representation is required, it is faster to use CLI as we skip rendering on frontend.