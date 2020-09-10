<?php
// ENCAPSULATION - keep certain logic accessible only on preferred way, and only preferred things from the whole logic
/**
 * Class Game
 */
class Game
{
    const PLAYSTATION = "ps4";

    /**
     * properties, methods, constants can be private, protected, public
     */

    /**
     * Private property can only be accessed from within the class itself
     */
    private $name;

    // public functions (get, set)
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

//    public static function staticFunction($n)
//    {
//        return 13 + $n;
//    }
}

$p = new Game();

//$p->name="Warcraft"; //Fatal error: Uncaught Error: Cannot access private property Game::$name
echo $p->getName(); // calling object method. name property is empty
$p->setName('Starcraft');
$p->getName();

// Why private properties?
// You don't want anybody or any other function to easily change data inside your function
// (it makes sense when there is a lot of code and people in play)
// Idea is protection of data from external sources and that class itself takes care of its data (which is why it is here)
// This is called encapsulation (using get/set methods to affect the data inside class along with private attributes)

var_dump($p); // you see ["name":"Game":private]=> string(8) "Red Dead Redemption 2" and by encapsulation OOP principle you know to use get set functions

echo Game::PLAYSTATION; // :: http://php.net/manual/en/language.oop5.paamayim-nekudotayim.php
//echo Game::staticFunction(14);

// BREAK TIME