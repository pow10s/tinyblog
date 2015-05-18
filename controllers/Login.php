<?php
    if (isset($_POST['enter_btn'])) {
        setcookie("user", $_POST['loginUserName']);

        if (!isset($_COOKIE['user'])) {
            include_once 'views/loginForm.php';
            include 'db/selectFromTable.php';
            selectFromTable('UserName', 'Password', $_POST['loginUserName'], $_POST['loginPassword']);
        } elseif ( $_COOKIE['user'] == $_POST['loginUserName']) {
            echo 'You are logged in you account';
        }
    }



