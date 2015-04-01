<?php
if($_GET['action']=='login'){
    include ('views/loginForm.php');
    if (!isset($_COOKIE['user']) || $_COOKIE['user'] == '') {
        include ('libs/login.php');
        if (isset($_POST['enter_btn'])) {
            if (validationUserNamePass($_POST['loginUserName'], $_POST['loginPassword'], 'db/user.txt', "user")) {
                setcookie("user", $_POST['loginUserName']);
            }
        }
        else {
            include_once ('views/loginForm.php');
        }
    }
}