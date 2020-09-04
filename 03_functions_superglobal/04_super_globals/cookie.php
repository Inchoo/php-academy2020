<?php

/**
 * Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users.
 *
 * Variables passed to the current script via HTTP Cookies.
 *
 * - https://www.php.net/manual/en/features.cookies.php
 */

var_dump($_COOKIE);

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// create cookie, it will be available on a next request
setcookie('name', 'Ivan', time() + 3600);

// delete cookie, set time in the past
//setcookie('name', '', time() - 3600);

/** EXERCISE #2 */
