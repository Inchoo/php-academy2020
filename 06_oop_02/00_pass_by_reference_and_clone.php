<?php

/**
 * A PHP reference is an alias, which allows two different variables to write to the same value.
 *
 * An object variable doesn't contain the object itself. It only contains an object identifier
 * which allows object accessors to find the actual object.
 *
 * https://www.php.net/manual/en/language.oop5.references.php
 * https://www.php.net/manual/en/language.references.pass.php
 */

class Foo {
    public $bar = 1;
}

$a = new Foo; // $a = new Foo();
$b = $a; // $a and $b are copies of the same identifier
$b->bar = 2;

echo '$a: ', $a->bar, '<br>'; // echoes 2
echo '$b: ', $b->bar, '<br>'; // echoes 2


/**
 * Object Cloning.
 *
 * https://www.php.net/manual/en/language.oop5.cloning.php
 */
$c = new Foo;
$d = clone $c;
$d->bar = 3;
echo '$c: ', $c->bar, '<br>'; // echoes 1
echo '$d: ', $d->bar, '<br>'; // echoes 3
