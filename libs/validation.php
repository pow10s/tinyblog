<?php
class ValidationFields {

    static function checkMail($email){

        if (!empty($email) && preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/", $email)){
            return true;
        }
        return false;
    }
    static function checkUser($user){

        if (!empty($user) && preg_match("/[a-zA-Z0-9]+$/", $user)) {
            return true;
        }
        return false;
    }
    static function checkPass($pass){

        if (!empty($pass) && preg_match("/^[a-z0-9]{6,}+$/i", $pass)) {
            return true;
        }
        return false;
    }
}

