<?php
include_once "00_functions.php";

/**
 * Class Game
 */
class Game
{

    /**
     * PHP 7.1 brought some changes to the way you can declare class level constants by giving the ability to mark them as
     * public, private and protected like methods and parameters.
     */
    const PLAYSTATION = "ps4";

    //private property
    private $name;


    //public functions (get, set)
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

$p = new Game();
//$p->name="Warcraft";//Fatal error: Uncaught Error: Cannot access private property Game::$name
$p->setName("Red Dead Redemption 2");
ipalog($p); // you see ["name":"Game":private]=> string(8) "Red Dead Redemption 2" and by encapsulation OOP principle you know to use get set functions
echo Game::PLAYSTATION; // :: http://php.net/manual/en/language.oop5.paamayim-nekudotayim.php