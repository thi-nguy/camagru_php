<?php

class Users extends DatabaseHandler
{
    protected function getUser($name)
    {
        $sql = "SELECT * from users WHERE name = ?";
        $sqlStatement = $this->connect()->prepare($sql);
        $sqlStatement->execute([$name]);

        $results = $sqlStatement->fetchAll();
        return $results;
    }

    protected function setUser($name, $email, $notification)
    {
        $sql = "INSERT INTO users(name, email, notification) VALUES(?, ?, ?)";
        $sqlStatement = $this->connect()->prepare($sql);
        $sqlStatement->execute([$name, $email, $notification]);
    }
}
