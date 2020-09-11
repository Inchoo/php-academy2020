<?php

/**
 * Classes which have a constructor method call this method on each newly-created object,
 * so it is suitable for any initialization that the object may need before it is used.
 *
 * The destructor method will be called as soon as there are no other references to a
 * particular object, or in any order during the shutdown sequence.
 *
 * https://www.php.net/manual/en/language.oop5.decon.php#object.construct
 */

class Foo
{
    public function __construct()
    {
        echo 'Creating ' . static::class . '<br>';
    }

    public function __destruct()
    {
        echo 'Destroying ' . static::class . '<br>';
    }
}

$foo = new Foo(); // calls __construct()
unset($foo); // calls __destruct()


class Person
{
    protected $firstName;
    protected $lastName;

    public function __construct($firstName, $lastName)
    {
        echo 'Creating ', static::class, '<br>';

        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

class Student extends Person
{
    protected $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->age = $age;
        parent::__construct($firstName, $lastName); // call parent's __construct method
    }
}

$person = new Person('Pero', 'Perić');
var_dump($person);
$student = new Student('Ivo', 'Ivić', 25);
var_dump($student);
