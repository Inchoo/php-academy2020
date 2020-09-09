<?php
// Interface - https://www.php.net/manual/en/language.oop5.interfaces.php
// Interfaces are "contracts" of code conduit. They make all extending classes follow their design.
// Use them as a reminders of what methods must be implemented and which design followed in your application
// All methods in interface must be public
// All methods must be implemented in child class (similar as in abstract class and abstract methods)


interface DocumentInterface
{
    public function getName();
    public function setName($name);
}

// Classes implement interfaces
class RandomDocument implements DocumentInterface
{
    protected $name;

    public function getName()
    {
        return 'random document: ' . $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

// Abstract classes can implement interfaces
abstract class Document implements DocumentInterface
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class PdfDocument extends Document
{
    public function getName()
    {
        return 'pdf document: ' . $this->name;
    }
}

$documents = [];

$p = new PdfDocument();
$p->setName('inherited abstract');
echo $p->getName();

echo "<br/>";

$r = new RandomDocument();
$r->setName('inherited abstract');
echo $r->getName();



