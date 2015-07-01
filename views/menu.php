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
    <li><a href="<?php echo BASE_URL ?>index.php?action=createmessage">Create message</a></li>
    <li><a href="<?php echo BASE_URL ?>index.php?action=viewmessages">View messagase</a></li>
    </ul>
    </li>
    <?php endif; ?>

    <li class="dropdown-top">
        <?php if(!isset($_COOKIE['user'])):?>
    <a class="dropdown-top" >Users</a>
    <ul class="dropdown-inside">

        <li><a href="<?php echo BASE_URL ?>index.php?action=login">Login</a></li>
        <li><a href="<?php echo BASE_URL ?>index.php?action=register">Register</a></li>

        </ul>
        <?php endif; ?>
    </li>
    <li class="dropdown-top">
        <?php if(isset($_COOKIE['user'])):?>
        <form method="post">
        <p><input type="submit" name="logout_btn" value="Logout"></p>
            </form>
        <?php endif; ?>
    </li>
    </ul>
</div>
</div>
