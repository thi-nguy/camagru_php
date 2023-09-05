<?php

class Person
{
    public $name;
    public $eyeColor;
    public $age;

    public static $drinkingAge = 21;
    public static function setDrinkingAge($age)
    {
        self::$drinkingAge = $age;
    }

    public function __construct($aName, $aColor, $age)
    {
        $this->name = $aName;
        $this->eyeColor = $aColor;
        $this->age = $age;
    }

    public function __destruct()
    {
    } // clean up our class, object once it's created

    public function setName($aName)
    {
        $this->name = $aName;
    }

    public function getDrinkingAge()
    {
        return self::$drinkingAge;
    }
}

echo Person::$drinkingAge; # Khong can create object van access vao static property duoc.
Person::setDrinkingAge(18);
echo Person::$drinkingAge;
$person1 = new Person("Daniel", "blue", "18");
echo $person1->getDrinkingAge();
