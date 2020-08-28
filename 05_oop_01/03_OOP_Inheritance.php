<?php
include_once "00_functions.php";

class Document
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

    public function formatID()
    {
        return "0" . $this->id;
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

}

$p = new Document(); //make instance of parent class
$p->setDate(new DateTime());
$p->setId(1);
echo $p->formatID();
ipalog($p);


$p = new Invoice();
$p->setDate(new DateTime()); //class Document
$p->setId(2); //class Document
$p->setAmount(20000); //class Invoice
echo $p->formatID();
ipalog($p);

$p = new Delivery();
$p->setDate(new DateTime()); //class Document
$p->setId(3); //class Document
$p->getWeight(23); //class Delivery
echo $p->formatID();
ipalog($p);

//PHP, like Java, does not support multiple inheritance.
//homework: what language supports multiple inheritance?