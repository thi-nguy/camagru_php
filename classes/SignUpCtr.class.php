<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

class SignUpCtr extends SignUpModel
{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;
    private $token;

    public function __construct($uid, $password, $passwordRepeat, $email, $token)
    {
        $this->uid = $uid;
        $this->pwd = $password;
        $this->pwdRepeat = $passwordRepeat;
        $this->email = $email;
        $this->token = $token;
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
        $this->sendVerificationEmail($this->uid, $this->email, $this->token);
        $this->setUser($this->uid, $this->pwd, $this->email, $this->token);
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

    private function sendVerificationEmail($uid, $email, $token)
    {
        $mail = new PHPMailer(true);

        //ServeTr settings
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->CharSet = "utf-8";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPOptions = array(
            'tls' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = $_ENV['Host'];
        $mail->Username =  $_ENV['Username'];
        $mail->Password = $_ENV['Password'];

        //Recipients
        $mail->setFrom($mail->Username, 'Camagru');
        $mail->addAddress($email);

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Verify your email to login to Camagru';
        $email_template = "
            <h2>You have registered with Camagru.</h2>
            <h5>To be able to login to our website, please verify your email address by clicking to the given link below.</h5>
            <br/><br/>
            <a href='http://localhost/signup.php?token=$token'>Verification Link</a>
            ";
        $mail->Body = $email_template;

        if ($mail->send()) {
            echo 'Message has been sent to your email.';
        } else {
            echo "FAIL to send verification email!";
        }
    }
}
