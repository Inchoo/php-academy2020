<?php

/**
 * Exceptions
 *
 * The term exception is shorthand for the phrase "exceptional event". An exception is an event
 * that occurs during the execution of a program that disrupts the normal flow of instructions.
 *
 * https://www.php.net/manual/en/language.exceptions.php
 */

class Foo
{
    private $data = [
        'name' => 'Pero',
        'age' => 25
    ];

    public function getData($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }

        throw new \Exception("'{$key}' doesn't exist.");
    }

    function inverse(int $x) {
        if (!$x) {
            throw new CustomException('Division by zero.');
        }

        return 1 / $x;
    }
}

$foo = new Foo();

try {
    echo $foo->getData('test');
} catch (\Exception $e) {
    // only if exceptions is cached
    echo $e->getMessage() . '<br>'; // executed if exceptions is catched
} finally {
    echo 'Executed every time' . '<br>';
}

// custom exception class
class CustomException extends \Exception
{
}


try {
    echo $foo->inverse(0);
    echo $foo->getData('test');
} catch (CustomException $e) {
    echo get_class($e) . '<br>';
} catch (\Exception $e) {
    echo get_class($e) . '<br>';
}
