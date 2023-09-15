<?php

class SignUpModel extends DatabaseHandler
{
    protected function setUser($uid, $pass, $email)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (username, user_pwd, email) VALUE (?, ?, ?)');

        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedPassword, $email))) {
            $stmt = null;
            echo ("PDO statement is failed");
            exit();
        }
    }

    protected function checkExistedUser($uid, $email)
    {
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?');

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            echo ("PDO statement is failed");
            exit();
        }

        $resultCheck = true;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        return $resultCheck;
    }
}
