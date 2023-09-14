<?php
class UsersController extends Users
{
    public function addUser($name, $email, $notification, $pass)
    {
        $this->setUser($name, $email, $notification, $pass);
    }
}
