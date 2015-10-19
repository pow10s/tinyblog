<?php
namespace libs;
function Redirect($urlTo, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $urlTo, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
function url(){
    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $_SERVER['REQUEST_URI']
    );
}
