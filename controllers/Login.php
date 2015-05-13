<?php
include ('views/loginForm.php');
    if (isset($_POST['enter_btn'])) {

        setcookie("user", $_POST['loginUserName']);
        if ($_COOKIE['user'] == $_POST['loginUserName']) {
            echo 'You are logged in you account';
        } else {
            include 'db/selectFromTable.php';
            selectFromTable('UserName', 'Password', $_POST['loginUserName'], $_POST['loginPassword']);
        }
    }



