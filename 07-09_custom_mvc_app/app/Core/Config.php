<?php

declare(strict_types=1);

namespace App\Core;

class Config
{
//    private static $instance;
//
//    // is not allowed to call from outside to prevent from creating multiple instances
//    private function __construct()
//    {
//        $config = include BP . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.php';
//        $this->data = $config;
//    }
//
//    // prevent the instance from being cloned (which would create a second instance of it)
//    private function __clone()
//    {
//    }
//
//    // prevent from being unserialized (which would create a second instance of it)
//    private function __wakeup()
//    {
//    }
//
//    public static function getInstance()
//    {
//        if (static::$instance === null) {
//            self::$instance = new static();
//        }
//
//        return self::$instance;
//    }

    public static function get(string $key)
    {
        $config = include BP . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.php';
        return $config[$key] ?? null;
    }
}
