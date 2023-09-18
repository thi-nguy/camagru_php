<?php

require "includes/autoLoader.inc.php";
require "functions.php";

$title = "SignUpPage";

require "./views/signup.view.php";

if (isset($_POST['submit'])) {

    // Grabbing the data
    $uid = $_POST['username'];
    $pwd = $_POST['password'];
    $pwdRepeat = $_POST['passwordRepeat'];
    $email = $_POST['email'];
    $verifyToken = md5(rand());

    loadEnvVar();
    // Instantiate SignUpController Class
    $signup = new SignUpCtr($uid, $pwd, $pwdRepeat, $email, $verifyToken);

    $signup->signUpUser();
    echo "Signup successfully on " . date('Y-m-d H:i:s');
}
