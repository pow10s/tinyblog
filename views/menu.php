<html>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
<body>
<div id="header"><h1 align="center">Tiny blog</h1></div>
<div id="menu">
<ul class="dropdown">
    <li class="dropdown-top">
    <a class="dropdown-top" href="/">Messages</a>
    <ul class="dropdown-inside">
    <li><a href="<?php echo BASE_URL ?>?action=createmessage">Create message</a></li>
    <li><a href="<?php echo BASE_URL ?>?action=viewmessages">View messagase</a></li>
    </ul>
    </li>

    <li class="dropdown-top">
    <a class="dropdown-top" href="/">Users</a>
    <ul class="dropdown-inside">
        <li><a href="<?php echo BASE_URL ?>?action=login">Login</a></li>
        <li><a href="<?php echo BASE_URL ?>?action=register">Register</a></li>
        </ul>
    </li>
    </ul>
</div>
