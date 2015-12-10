<?php
namespace libs;

class Cookie
{
    public function create($cookieName,$cookieData, $time = 3600)
    {
        setcookie ($cookieName,$cookieData, time()+$time, '/');
    }

    public function delete($cookieName, $cookieData,$time=3600)
    {
        setcookie ($cookieName,$cookieData, time()-$time, '/');
    }
}