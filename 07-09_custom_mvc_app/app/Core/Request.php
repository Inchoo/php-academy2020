<?php

namespace App\Core;

/**
 * Class Request
 *
 * Handles everything request related
 */
class Request
{
    public static function getPostParam($key, $default='')
    {
        return $_POST[$key] ?? $default;
    }

    public static function getPostParams()
    {
        return $_POST;
    }
}
