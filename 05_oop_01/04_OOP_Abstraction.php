<?php
include_once "00_functions.php";

//An abstraction denotes
//the essential characteristics of an object that distinguish it from all
//other kinds of object and thus provide crisply defined conceptual
//boundaries, relative to the perspective of the viewer.” — G. Booch,
//Object-Oriented Design With Applications, Benjamin/Cummings, Menlo
//Park, California, 1991.
abstract class Document
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

//$p = new Document(); //Fatal error: Uncaught Error: Cannot instantiate abstract class Document in
$p = new Invoice();
$p->setDate(new DateTime());
$p->setId(1);
echo $p->formatID();
ipalog($p);
