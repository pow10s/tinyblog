<?php echo BASE_URL?>
<html>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
<body>
<div id="header">
<div id="menu">
<ul class="dropdown">
    <?php if(isset($_COOKIE['user'])):?>
    <li class="dropdown-top">
    <a class="dropdown-top">Messages</a>
    <ul class="dropdown-inside">

    <li><a href="http://tinyblog.dev/message/message">Create message</a></li>
    <li><a href="http://tinyblog.dev/viewMessages/viewMessages">View messagase</a></li>

    </ul>
    </li>
    <?php endif; ?>

    <li class="dropdown-top">
        <?php if(!isset($_COOKIE['user'])):?>
    <a class="dropdown-top" >Users</a>
    <ul class="dropdown-inside">

        <li><a href="http://tinyblog.dev/login/login">Login</a></li>
        <li><a href="http://tinyblog.dev/register/register">Register</a></li>

        </ul>
        <?php endif; ?>
    </li>
    <li class="dropdown-top">
        <?php if(isset($_COOKIE['user'])):?>
            <p><a href="http://tinyblog.dev/logout/logout">Logout</a></p>
        <?php endif; ?>
    </li>
    </ul>
</div>
</div>
