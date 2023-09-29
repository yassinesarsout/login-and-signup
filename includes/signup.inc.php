<?php

if(isset($_POST["submit"]))
{
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdconf = $_POST["pwdconf"];
    $email = $_POST["email"];


    include "../classes/Dbh-classes.php";
    include "../classes/signup-classes.php";
    include "../classes/signup-contr-classes.php";

    $signup = new SignupContr($uid, $pwd, $pwdconf, $email);

    $signup->signupUser();

    header("location: ../index.php?error=none");
}