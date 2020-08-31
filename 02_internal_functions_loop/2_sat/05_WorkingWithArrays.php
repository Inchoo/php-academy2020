<?php
// Task: Create yours or fictional family tree where each name is a key that has array of its parents attached.
// Start from yourself (you are first level).
// Parents also are keys of array of their parents (go two levels - until your grandparents, they should be indexed keys).
// If you have brothers/sisters they need to be on same level as you. var_dump array.
$familyTree = [
    'Tomislav' =>
        [
            'Robert' => ['Aleksandar', 'Ivanka'],
            'Nevenka' => ['Antun', 'Danica']
        ]
];

var_dump($familyTree);

// Task: Create the $users variable that is empty array.
// Under the key (string type) that is your birth date in format dd/mm/YYYY assign your family tree data.
$users = [];
$users = ['27/07/1989' => $familyTree];

var_dump($users);

// Task: Create the family tree array of person left or right to you in new variable.
// Add to $users variable same way as you're added (as birth date as key).
// Output last grandparent name of a choice from your collegue's array (echo)

$collegue = [
    'Joza' => [
        'Mato' => ['Branko', 'Agata'],
        'Ivana' => ['Marko', 'Branka']
    ]
];

var_dump($collegue);
$users['13/12/1988'] = $collegue;

var_dump($users);

var_dump($users['13/12/1988']['Joza']['Mato'][1]);

//read more:http://php.net/manual/en/ref.array.php
//https://www.w3resource.com/php-exercises/php-basic-exercises.php
//https://www.w3resource.com/php-exercises/php-array-exercises.php