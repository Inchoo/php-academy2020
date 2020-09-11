<?php

/**
 * __call() is triggered when invoking inaccessible methods in an object context.
 * __callStatic() is triggered when invoking inaccessible methods in a static context.
 *
 * https://www.php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.methods
 */

class Qux
{
    public function __call($name, $arguments)
    {
        $args = implode(', ', $arguments);
        echo static::class . '::' . __FUNCTION__ . "(name: {$name}, arguments: [{$args}])" . '<br>';
    }

    public static function __callStatic($name, $arguments)
    {
        $args = implode(', ', $arguments);
        echo static::class . '::' . __FUNCTION__ . "(name: {$name}, arguments: [{$args}])" . '<br>';
    }
}

$qux = new Qux();
$qux->setName('Pero', 'Perić'); // calls __call()
Qux::setAge(25); // calls __callStatic()


class DataObject
{
    private $data = [];

    private function setData($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function getData($key)
    {
        return $this->data[$key] ?? null; // ?? => null coalescing operator
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            $this->$name(...$arguments); // ... => splat operator
        }
    }

    private static function printArguments(...$arguments)
    {
        echo implode(', ', $arguments) . '<br>';
    }

    public static function __callStatic($name, $arguments)
    {
        if (method_exists(static::class, $name)) {
            static::$name(...$arguments); // ... => splat operator
        }
    }
}

$dataObject = new DataObject();

$dataObject->setData('name', 'Pero'); // calls __call()
echo $dataObject->getData('name'); // calls getData()

DataObject::printArguments(1, 2, 3, 4, 5); // calls __callStatic()
