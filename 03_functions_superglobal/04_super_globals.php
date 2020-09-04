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
var_dump($GLOBALS);

// Server and execution environment information
var_dump($_SERVER);

/** $_GET */
// 04_super_globals/get.php

/** $_POST */
// 04_super_globals/post.php

// HTTP Request variables
// By default contains the contents of $_GET, $_POST and $_COOKIE.
var_dump($_REQUEST);

/** $_COOKIE */
// 04_super_globals/cookie.php

/** $_SESSIOM */
// 04_super_globals/session.php

/** $_FILE */
// 04_super_globals/file.php

// Variables passed to the current script via the environment method
var_dump($_ENV);
var_dump(getenv());
