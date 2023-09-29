<?php

class SignupContr extends Signup{

    private $uid;
    private $pwd;
    private $pwdconf;
    private $email;

    public function __construct($uid, $pwd, $pwdconf, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdconf = $pwdconf;
        $this->email = $email;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
             //echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false){
             //echo "Invaled email!";
            header("location: ../index.php?error=invalidEmail");
            exit();
        }
        if($this->pwdMatch() == false){
             //echo "Invaled password!";
            header("location: ../index.php?error=invalidPassword");
            exit();
        }
        if($this->uidTakenCheck() == false){
             //echo "username or email taken!";
            header("location: ../index.php?error=uidTakenCheck");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdconf) || empty($this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    private function pwdMatch() {
        $result;
        if($this->pwd !== $this->pwdconf) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    private function invalidEmail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    private function uidTakenCheck() {
        $result;
        if(!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

}