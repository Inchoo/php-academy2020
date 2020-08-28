<?php
include_once "00_functions.php";
//A class is a blueprint of object
//Klasa je opisnik objekta
class Person
{
    //not according to OOP encapsulation principle
    public $name;
    public $active;
    public $income;
}

//Object is instance of class
//Objekt je instanca (pojavnost) klase
$p = new Person();
$p->name = "John Doe";
$p->active = true;
$p->income = 8500.99;


ipalog($p);
