<?php

/**
 * Superglobals — Superglobals are built-in variables that are always available in all scopes
 *   - $GLOBALS
 *   - $_SERVER
 *   - $_GET
 *   - $_POST
 *   - $_COOKIE
 *   - $_REQUEST
 *   - $_SESSION
 *   - $_FILES
 *   - $_ENV
 */

// References all variables available in global scope
//var_dump($GLOBALS);

// Server and execution environment information
//var_dump($_SERVER);

//var_dump($_GET);
//echo $_GET['name'];

//var_dump($_POST);
//echo $_GET['username'];
//echo $_GET['password'];

// Variables passed to the current script via HTTP Cookies
//setcookie('name', 'Ivan', time() + 3600);
//var_dump($_COOKIE);

// HTTP Request variables
// By default contains the contents of $_GET, $_POST and $_COOKIE.
//var_dump($_REQUEST);

// Array containing session variables available to the current script
//session_start();
//var_dump($_SESSION);
//$_SESSION['name'] = 'Ivan';

// Items uploaded to the current script via the HTTP POST method
var_dump($_FILES);

// Variables passed to the current script via the environment method
//var_dump($_ENV);
