<?php

class UsersView extends Users
{
    public function showUserEmail($name)
    {
        $results = $this->getUser($name);
        echo "Email: " . $results[0]['email'] . "</br>";
    }
}
