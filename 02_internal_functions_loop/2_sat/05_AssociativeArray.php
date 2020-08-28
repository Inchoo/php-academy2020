<?php
// Arrays - lists of items (items being variables, constants, other arrays, objects, etc..)
// ASSOCIATIVE ARRAYS - use named keys

$arr = [
    'id' => 1,
    'name' => 'Pero'
];

echo $arr['name'];

echo "<pre>";
print_r($arr);
echo "</pre>";

// Create array from string
explode(',', '1,2,3,4,5,6,7');

// Create string from array
implode(',', [1,2,3,4,5]);


