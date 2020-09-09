<?php
// Abstract class - classes that cannot be instantiated
// https://www.php.net/manual/en/language.oop5.abstract.php
// Why use them?

/**
 * Classes defined as abstract cannot be instantiated,
 * and any class that contains at least one abstract method must also be abstract.
 * Methods defined as abstract simply declare the method's signature - they cannot define the implementation.
 */

abstract class Document
{

    protected $string;
//    protected $name;

    public function getRandomString()
    {
        return $this->string;
    }

    public function setRandomString($string)
    {
        $this->string = $string;
    }

//    abstract public function getName(); // must be defined in children
//    abstract public function setName();
}

class PdfDocument extends Document
{
    private $amount;

    // overrides behavior in parrent class
    public function getRandomString()
    {
        return 'modification - ' . $this->string;
    }

//    public function getName()
//    {
//        // TODO: Implement getName() method.
//    }
//
//    public function setName()
//    {
//        // TODO: Implement setName() method.
//    }
}

class WordDocument extends Document
{
}

// Try instantiate abstract class
//$doc = new Document(); // Cannot instantiate abstract class Document

$p = new PdfDocument();
$p->setRandomString('pdf document test');
echo $p->getRandomString();

echo "<br/>";

$w = new WordDocument();
$w->setRandomString('word document test');
echo $w->getRandomString();
// Try overriding getRandomString method

// Try setting Invoice::getRandomString to private (child class must use less restrictive access modified for methods)

//good reading (regarding implementation language VB.Net) http://codebetter.com/raymondlewallen/2005/07/19/4-major-principles-of-object-oriented-programming/