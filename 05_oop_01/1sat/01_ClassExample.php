<?php
// Što je klasa?
//A class is a blueprint of object
//Klasa je opisnik objekta. Objekt je instanca klase, odnosno njena upotrebljiva manifestacija.

// Čemu služi?
// Sadrži određenu logiku i/ili podatke i brine se za njih. Lakše za održavati nego proceduralni kod.
// Preglednije i univerzalnije (za čitanje i tuđe korištenje)

//$exists = class_exists('Person');// exists because all loaded classes are recognised by PHP (even if not instanced)
//var_dump($exists);

class Person
{
    // (properties generally should be access only by object itself, not available to outside world)
    // class properties (sometimes called attributes) can be of any type
    public $name;
    public $active;
    public $income;

    // class can have methods (functions defined in class)
    public function getIncome()
    {
        return $this->income;
    }
}

//Object is instance of class
//Objekt je instanca (upotrebljiva manifestacija) klase
// Instanciranje klase
$person = new Person();
// Dodjeljivanje vrijednosti
$person->name = "John Doe";
$person->active = true;
$person->income = 8500.99;

var_dump($person);

// Ispisivanje vrijednosti
echo $person->income;
echo $person->name;
echo $person->getIncome();

$testVar = $person->name;
var_dump($testVar);

// Useful functions regarding classes:
// Check if class exists
$exists = class_exists('Person');
var_dump($exists);
// Get all class methods
var_dump(get_class_methods('Person'));

// Check if methods exists
var_dump(method_exists($person, 'test'));
var_dump(method_exists($person, 'getIncome'));

// Task: Create a new class with one method and property in class, assign it to a variable and var_dump the variable.
// Assign the value to the property, try outputting the property.

class Test {
    public $name;

    public function testMe()
    {
        echo "I exist";
    }
}

$test = new Test();
var_dump($test);

// Task 2: Create a function outside class from previous task, that checks if object methods exists in previous class and executes this method if it does.

function checker($object, $method) {
//    var_dump($object);
//    var_dump($method);
//    var_dump(method_exists($object, $method));
    if (method_exists($object, $method)) {
        $object->$method();
    }
}

checker($test, 'testMe');
