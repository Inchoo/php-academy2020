<?php

var_dump($_GET);

// www.academy.loc?name=Ivan&age=33
if (isset($_GET['name'])) {
    echo 'Name: ', $_GET['name'], '<br>';
}
if (isset($_GET['age'])) {
    echo 'Age: ', $_GET['age'], '<br>';
}
