<?php
<<<<<<< HEAD
    if (isset($_POST['enter_btn'])) {
        setcookie("user", $_POST['loginUserName']);

        if (!isset($_COOKIE['user'])) {
            include_once 'views/loginForm.php';
            include 'db/selectFromTable.php';
            selectFromTable('UserName', 'Password', $_POST['loginUserName'], $_POST['loginPassword']);
        } elseif ( $_COOKIE['user'] == $_POST['loginUserName']) {
            echo 'You are logged in you account';
=======
if (isset($_COOKIE['user'])) {
    echo "You are logged";
}
else {
    include_once 'views/loginForm.php';
    if (isset($_POST['enter_btn'])) {
        include ('db/selectFromTable.php');
        if(selectFromTable($_POST['loginUserName'], $_POST['loginPassword'])){
            setcookie("user", $_POST['loginUserName']);
            echo "Welcome to the site";
>>>>>>> f122f5363e6b0aae6e7677b98c97fede9d5be2f5
        }
        else echo "User not found";

    }
}



