<?php

class Test extends DatabaseHandler
{
    public function getNameStatement($name)
    {
        $sqlQuery = "SELECT * from photos WHERE image_name = ?";
        $PDOStatement = $this->connect()->prepare($sqlQuery);
        $PDOStatement->execute([$name]);
        $nameList = $PDOStatement->fetchAll();

        foreach ($nameList as $one_name) {
            echo $one_name['image_name'] . "</br>";
        }
    }

    public function setNameStatement($name, $photo, $date, $user_id)
    {
        $sqlQuery = "INSERT INTO photos(name, image, date_created, user_fk ) VALUES(?, ?, ?, ?)";
        $sqlStatement = $this->connect()->prepare($sqlQuery);
        $sqlStatement->execute([$name, $photo, $date, $user_id]);
    }
}
