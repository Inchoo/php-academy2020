<?php

/**
 * Array containing session variables available to the current script.
 *
 * - https://www.php.net/manual/en/function.session-start.php
 */

// Start new or resume existing session
session_start();

var_dump($_SESSION);

$users = [
    1 => [
        'name' => 'Marko'
    ],
    2 => [
        'name' => 'Pero'
    ],
    3 => [
        'name' => 'Janko'
    ]
];

if (isset($_SESSION['id'], $users[$_SESSION['id']])) {
    $user = $users[$_SESSION['id']];
    echo "User {$user['name']} is logged in.";
}

$_SESSION['id'] = 2; // add to session
unset($_SESSION['id']); // remove from session

/** EXERCISE #3 */
