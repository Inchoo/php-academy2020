<?php


//$GLOBALS An associative array containing references to all variables which are currently defined in the global scope of the script.
//$_SERVER is an array containing information such as headers, paths, and script locations.
//$_SESSION An associative array containing session variables available to the current script.
//$_COOKIE An associative array of variables passed to the current script via HTTP Cookies.
//$_REQUEST An associative array that by default contains the contents of $_GET, $_POST. On older version of PHP it contained $_COOKIE too
//$_GET An associative array of variables passed to the current script via the URL parameters (aka. query string).
//$_POST https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/Sending_and_retrieving_form_data
//$_FILES An associative array of items uploaded to the current script via the HTTP POST method.
//$_ENV An associative array of variables passed to the current script via the environment method.

//http://php.net/manual/en/language.variables.superglobals.php
print_r($GLOBALS);
$name = 'IPA';


echo $GLOBALS["name"];

//session_name('IPASESSID'); override PHPSESSID
session_start();
$_SESSION["visitor"] = $_SERVER["HTTP_USER_AGENT"];
print_r($_SESSION);
//homework
// find directory path where apache store data about sessions.
//echo session_save_path();

setcookie('ipa_test', 1);

if (isset($_POST)) {
    //check the developers console after submitting the form. Pay attention on Content-Type and Form data
    print_r($_POST);
}

if (isset($_POST) && isset($_FILES)) {
    print_r($_FILES);
    //This is just an example. Please, never do this before checking if the file is allowed to be uploaded.
    $uploadPath = getcwd() . $_FILES['user_file']['name'];
    $uploaded = move_uploaded_file($_FILES['user_file']['tmp_name'], $uploadPath);
}

print_r(getenv());


?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>IPA</title>

</head>

<body>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    Name: <input type="text" name="name"><br>
    <input type="submit">
</form>

<!--
 When you make a POST request, you have to encode the data that forms the body of the request in some way.

HTML forms provide three methods of encoding.

application/x-www-form-urlencoded (the default)
multipart/form-data
text/plain

Use multipart/form-data if the form contains a file upload,
and application/x-www-form-urlencoded otherwise, which is the default if you omit enctype
 -->
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    File: <input name="user_file" type="file" />
    <input type="submit">
</form>
</body>
</html>
