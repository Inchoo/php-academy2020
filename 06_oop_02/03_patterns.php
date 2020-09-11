<?php

/**
 * Design pattern is a general repeatable solution to a commonly occurring problem in software design.
 *
 * https://refactoring.guru/design-patterns
 */

/**
 * Singleton
 */

class Database
{
    private static $instance;

    // is not allowed to call from outside to prevent from creating multiple instances
    private function __construct()
    {
    }

    // prevent the instance from being cloned (which would create a second instance of it)
    private function __clone()
    {
    }

    // prevent from being unserialized (which would create a second instance of it)
    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (static::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}

$db = Database::getInstance();
var_dump($db);
