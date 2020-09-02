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


// Array functions
$arr1 = [1,2,'value1'];
$arr2 = [
    'test_key1' => 'value1',
    'test_key2' => 'value2',
];

$arr1Keys = key($arr1);
$arr2Keys = key($arr2);
$arr1Values = array_values($arr1);
$arr2Values = array_values($arr2);

var_dump(isset($arr1Keys['test_key1']));
unset($arr1Keys['test_key1']);
var_dump(isset($arr1Keys['test_key1']));

var_dump($arr1Keys);

// php.net is your best friend, learn how to google and search what you need
// Some function return array types, like this one you will find useful in near future
$urlPars = parse_url('https://www.php.net/manual/en/function.parse-url.php');
var_dump($urlPars);
// parse url return array

$name = str_split('Tomislav');
var_dump($name);

var_dump(array_merge($arr1, $arr2));
var_dump(array_merge($urlPars, $users));

$testArr = ['test_key' => 1,2,3];
var_dump(in_array(1, $testArr));
var_dump(array_key_exists('test_key', $testArr));

//read more:http://php.net/manual/en/ref.array.php
//https://www.w3resource.com/php-exercises/php-basic-exercises.php
//https://www.w3resource.com/php-exercises/php-array-exercises.php