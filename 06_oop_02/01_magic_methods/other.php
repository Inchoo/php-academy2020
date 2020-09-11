<?php

/**
 * __toString() method allows a class to decide how it will react when it is treated like a string.
 * __sleep() method is executed prior to any serialization(). Needs to return an array with the names
 *           of all variables of that object that should be serialized,
 * __wakeup() method can reconstruct any resources after unserialize() that the object may have.
 * __serialize() method defines a serialization-friendly arbitrary representation of the object.
 * __unserialize() method accepts restored array that was returned from __serialize().
 *                 It may then restore the properties of the object from that array as appropriate.
 * __invoke() method is called when a script tries to call an object as a function.
 * __set_state method is called for classes exported by var_export().
 * __clone method is called after cloning is complete.
 */

class Magic
{
    private $name;
    protected $age;
    protected $height;

    public function __construct()
    {
        $this->name = 'Pero';
        $this->age = 25;
    }

    public function __toString()
    {
        return static::class . '::' . __FUNCTION__ . '()' . '<br>';
    }

    // not called if __serialize() is present
    public function __sleep()
    {
        echo static::class . '::' . __FUNCTION__ . '()' . '<br>';
        return ['name', 'age'];
    }

    // not called if __unserialize() is present
    public function __wakeup()
    {
        echo static::class . '::' . __FUNCTION__ . '()' . '<br>';
    }

    public function __serialize(): array
    {
        echo static::class . '::' . __FUNCTION__ . '()' . '<br>';

        return [
            'name' => $this->name,
            'age' => $this->age
        ];
    }

    public function __unserialize(array $data): void
    {
        echo static::class . '::' . __FUNCTION__ . '()' . '<br>';

        $this->name = $data['name'] ?? null;
        $this->age = $data['age'] ?? null;
    }

    public function __invoke()
    {
        echo static::class . '::' . __FUNCTION__ . '()' . '<br>';
    }

    public function __clone()
    {
        echo static::class . '::' . __FUNCTION__ . '()' . '<br>';

        $this->name = 'Ivo';
        $this->age = '35';
        $this->height = '205';
    }

    public function __debugInfo()
    {
        echo static::class . '::' . __FUNCTION__ . '()' . '<br>';

        return ['name', 'age', 'height'];
    }
}

$magic = new Magic();
var_dump($magic);

echo $magic; // calls __toString()

// serialize() generates a storable representation of a value
$serializedMagic = serialize($magic); // calls __sleep()
var_dump($serializedMagic);
$unSerializedMagic = unserialize($serializedMagic, ['allowed_classes' => ['Magic']]); // calls __wakeup()
var_dump($unSerializedMagic);

$magic(); // calls __invoke()

$magic2 = clone $magic; // calls __clone()
var_dump($magic2); // calls __debugInfo()
