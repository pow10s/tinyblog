<?php
namespace libs;

class Cookie
{
    public function create($cookieName,$cookieData)
    {
        setcookie ($cookieName,$cookieData, time()+3600, '/', NULL, 0 );
    }

    public function delete($cookieName, $cookieData)
    {
        setcookie ($cookieName,$cookieData, time()-3600, '/', NULL, 0 );
    }
}