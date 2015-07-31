<?php
class Helper{
    public static function setCookie(){
        setcookie("user", $_POST['loginUserName'], time() + (86400 * 30), "/");
    }
    public static function deleteCookie(){
        unset($_COOKIE['user']);
        setcookie('user', '', time() - 3600, '');
    }
}