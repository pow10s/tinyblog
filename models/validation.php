<?php
class ValidationFields {
    private $email;
    private $user;
    private $pass;
    public function getEmail() {
        return $this->email;
    }
    public function getUser() {
        return $this->user;
    }
    public function getPass() {
        return $this->pass;
    }
    public function __construct($email,$user,$pass){
        $this->email=$email;
        $this->user=$user;
        $this->pass=$pass;
    }
    function checkMail(){

        if (!empty($this->email) && preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/", $this->email)){
            return true;
        }
        return false;
    }
    function checkUser(){

        if (!empty($this->user) && preg_match("/[a-zA-Z0-9]+$/", $this->user)) {
            return true;
        }
        return false;
    }
    function checkPass(){

        if (!empty($this->pass) && preg_match("/^[a-z0-9]{6,}+$/i", $this->pass)) {
            return true;
        }
        return false;
    }
}
$object = new ValidationFields('stosdima','stosdima','123456');
print_r($object->checkMail());