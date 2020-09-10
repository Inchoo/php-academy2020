<?php
// Inheritance  - extending the classes

class Document
{
//    private $date;

    /**
     * Protected property is similar to private, but besides class itself it can be accessed from classes extending this class
     */
    protected $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

//    public function testMethod()
//    {
//        return "test document";
//    }
}

class Invoice extends Document
{

    private $amount;
    private $price;

    // overrides behavior in parrent class
    // you can do override even if property is different type (override private in parent to public for example)
//    public function testMethod()
//    {
//        return "test invoice";
//    }
}

$p = new Document(); //make instance of parent class
$p->setName('document');
echo $p->getName();
//echo $p->formatName();
var_dump($p);


$i = new Invoice();
var_dump($i); // Invoice has name property although we never defined it, it inherited it from Document class

$i->setName('invoice');
echo $i->getName();
//echo $p->formatName();
var_dump($i);

// Overrides, add test method to both classes, see the difference output
//echo $p->testMethod();
//echo $i->testMethod();

// Override property $name to be public

// final class (set Document on final class)

// PHP, like Java, does not support multiple inheritance (cannot extend multiple classes - what if they got the same methods defined)
// Diamond problem

// Task: Create a class with get and set methods and property which is private and outputted/set only using those methods


class Test
{
    protected $test;

    public function getTest()
    {
        return $this->test;
    }

    public function setTest($test)
    {
        $this->test = $test;
    }
}

$t = new Test();
$t->setTest('ono dos');
echo $t->getTest();

// Task2: Extend this class and override `get` method so that it appends string 'test' before the output. Instantiate and output this child class and its get method.

class TestExt extends Test
{

    public function getTest()
    {
        return 'test' . $this->test;
    }
}

$t = new TestExt();
$t->setTest('ono dos');
echo $t->getTest();

