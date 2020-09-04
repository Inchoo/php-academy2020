<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <div>Username: <input type="text" name="username"></div>
    <div>Password: <input type="password" name="password"></div>
    <button>Submit</button>
</form>

<?php

var_dump($_POST);

if (isset($_POST['username'])) {
    echo 'Name: ', $_POST['username'], '<br>';
}
if (isset($_POST['password'])) {
    echo 'Age: ', $_POST['password'], '<br>';
}
