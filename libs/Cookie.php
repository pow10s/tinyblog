<?php
class Cookie{
    private $cookie_name;
    private $cookie_value;

    public static function setCookie($cookie_name,$cookie_value){
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }
    public static function deleteCookie($cookie_value){
        unset($cookie_valueZ);
        setcookie('user', '', time() - 3600, '');
    }
}
