<html>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
<body>
<div id="header"><h1 align="center">Tiny blog</h1></div>
<div id="menu">
<ul class="dropdown">
    <li class="dropdown-top">
    <a class="dropdown-top">Messages</a>
    <ul class="dropdown-inside">
        <?php if(isset($_COOKIE['user'])):?>
    <li><a href="<?php echo BASE_URL ?>/projs/tinyblog/index.php?action=createmessage">Create message</a></li>
    <li><a href="<?php echo BASE_URL ?>/projs/tinyblog/index.php?action=viewmessages">View messagase</a></li>
        <?php endif; ?>
    </ul>
    </li>

    <li class="dropdown-top">
    <a class="dropdown-top" >Users</a>
    <ul class="dropdown-inside">
        <?php if(!isset($_COOKIE['user'])):?>
        <li><a href="<?php echo BASE_URL ?>/projs/tinyblog/index.php?action=login">Login</a></li>
        <li><a href="<?php echo BASE_URL ?>/projs/tinyblog/index.php?action=register">Register</a></li>
        <?php endif; ?>
        </ul>
    </li>
    </ul>
</div>
