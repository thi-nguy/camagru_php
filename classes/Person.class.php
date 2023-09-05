<?php

class Person // Class's name should be the same as the file's name
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

    public function getPersonName()
    {
        return $this->name;
    }
}
