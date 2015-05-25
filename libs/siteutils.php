<?php
function Redirect($urlTo, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $urlTo, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}