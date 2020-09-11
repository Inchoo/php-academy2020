<?php

/**
 * __get() is utilized for reading data from inaccessible (protected or private) or non-existing properties.
 * __set() is run when writing data to inaccessible (protected or private) or non-existing properties.
 * __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.
 * __unset() is invoked when unset() is used on inaccessible (protected or private) or non-existing properties.
 *
 * https://www.php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.members
 */

class Bar
{
    private $privateProperty;
    protected $protectedProperty;
    public $publicProperty;

    public function __get($name)
    {
        echo static::class . '::' . __FUNCTION__ . "(name: {$name})" . '<br>';
    }

    public function __set($name, $value)
    {
        echo static::class . '::' . __FUNCTION__ . "(name: {$name}, value: {$value})" . '<br>';
    }

    public function __isset($name)
    {
        echo static::class . '::' . __FUNCTION__ . "(name: {$name})" . '<br>';
    }

    public function __unset($name)
    {
        echo static::class . '::' . __FUNCTION__ . "(name: {$name})" . '<br>';
    }
}

$foo = new Bar();

$foo->privateProperty; // calls __get()
$foo->protectedProperty = 1; // calls __set()
$foo->publicProperty = 2; // sets value because property exist and is accessible
isset($foo->privateProperty); // calls __isset()
unset($foo->protectedProperty); // calls __unset()


class Varien
{
    private $data = [];

    public function __get($name)
    {
        return $this->data[$name] ?? null; // ?? => null coalescing operator
//        if (isset($this->data[$name])) {
//            return $this->data[$name];
//        }
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }
}

$varien = new Varien();

echo $varien->name; // null
$varien->name = 'Pero'; // $this->data['name'] => 'Pero'
echo $varien->name; // Pero
echo isset($varien->name) ? 'true' : 'false'; // true
echo isset($varien->age) ? 'true' : 'false'; // false
unset($varien->name); // unset($this->data['name'])
echo $varien->name; // null
