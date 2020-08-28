<?php


class Person
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}


$a = new Person();
$a->setName("Pero");

$b = new Person();
$b->setName("Pero");
if ($a === $b) {
    echo "same Person ";
} else {
    echo "NOT same Person ";
}

echo "<hr />";


//Singleton pattern 
//read this: https://coderoncode.com/design-patterns/programming/php/development/2014/01/27/design-patterns-php-singletons.html 
class App
{
    protected static $instance = null;

    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            //Find out what is a difference between new self() and new static()
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$a = App::getInstance();
$a->setName("Pero");

$b = App::getInstance();
$b->setName("Marko");
if ($a === $b) {
    echo "same App";
} else {
    echo "not same App";
}