<?php
include_once "../00_functions.php";

interface IdFormatter
{
    public function formatId();
}

abstract class Document implements IdFormatter
{

    private $date;
    protected $id;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

class Invoice extends Document
{

    private $amount;


    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    //overrides behavior in parrent class
    public function formatID()
    {
        return "00" . $this->id; //I can see this property in child class without get set
    }
}

class Delivery extends Document
{

    private $weight;

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function formatId()
    {
        return "0" . $this->id;
    }
}

$documents = [];

$p = new Invoice();
$p->setDate(new DateTime()); //class Document
$p->setId(2); //class Document
$p->setAmount(2000); //class Invoice
$documents[] = $p;

$p = new Delivery();
$p->setDate(new DateTime()); //class Document
$p->setId(3); //class Document
$p->getWeight(23); //class Delivery
$documents[] = $p;

//Polymorphism means one name, many forms.  Polymorphism
//manifests itself by having multiple methods all with the same name, but
//slighty different functionality.
function printoutFormatsID(array $documents)
{
    foreach ($documents as $d) {
        echo $d->formatID(), "<br />";// here we use Polymorphism. We are calling a method that will resolve in different forms
    }
}

printoutFormatsID($documents);


