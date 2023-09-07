<?php
class UsersController extends Users
{
    public function addUser($name, $email, $notification)
    {
        $this->setUser($name, $email, $notification);
    }
}
