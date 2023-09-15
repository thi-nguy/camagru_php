<?php

class SignUpCtr extends SignUpModel
{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $password, $passwordRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $password;
        $this->pwdRepeat = $passwordRepeat;
        $this->email = $email;
    }

    public function signUpUser()
    {
        if ($this->emptyInput()) {
            echo ("Error! Empty input(s).");
            exit();
        }
        if (!$this->validUid()) {
            echo ("Error! Invalid username. Must be in alphanumeric form.");
            exit();
        }
        if (!$this->validEmail()) {
            echo ("Error! Invalid email");
            exit();
        }
        if (!$this->isPwdMatch()) {
            echo ("Error! Password don't match");
            exit();
        }
        if (!$this->checkExistedUser($this->uid, $this->email)) {
            echo ("Error! User or email is already used");
            exit();
        }
        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput()
    {
        $result = false;
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function validUid()
    {
        $result = false;
        if (preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = true;
        }
        return $result;
    }

    private function validEmail()
    {
        $result = false;
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        return $result;
    }

    private function isPwdMatch()
    {
        $result = false;
        if ($this->pwd == $this->pwdRepeat) {
            $result = true;
        }
        return $result;
    }
}
