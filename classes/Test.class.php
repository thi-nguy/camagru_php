<?php

class Test extends DatabaseHandler
{
    public function getNameStatement($name)
    {
        $sqlQuery = "SELECT * from photos WHERE name = ?";
        $PDOStatement = $this->connect()->prepare($sqlQuery);
        $PDOStatement->execute([$name]);
        $nameList = $PDOStatement->fetchAll();

        foreach ($nameList as $one_name) {
            echo $one_name['name'] . "</br>";
        }
    }

    public function setNameStatement($name, $photo, $date)
    {
        $sqlQuery = "INSERT INTO photos(name, image,date_created) VALUES(?, ?, ?)";
        $sqlStatement = $this->connect()->prepare($sqlQuery);
        $sqlStatement->execute([$name, $photo, $date]);
    }
}
