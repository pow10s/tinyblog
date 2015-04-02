<?php
include ('config.php');

//include ('views/message/create.php');

if ($_GET['action'] == 'register') {
    include ('views/registration.php');
    include ('libs/validation.php');
    if (isset($_POST['submit_btn'])) {
        if (checkMail($_POST['e-mail']) == true && checkUser($_POST['username']) == true && checkPass($_POST['pass']) == true) {
            file_put_contents('db/user.txt', $_POST['e-mail'] . ';' . $_POST['username'] . ';' . $_POST['pass'] . "\r\n", FILE_APPEND);
            echo 'Thank you for registering.';
        } 
        else {
            echo 'Invalid input.';
        }
    }
}
if ($_GET['action'] == 'search') {
    include ('views/searchForm.php');
    include ('libs/search.php');
    if (isset($_POST['search_btn'])) {
        echo searchByUserChunk($_POST['chunkOfName'], 'db/user.txt');
    }
}
if ($_GET['action'] == 'login') {
    if (!isset($_COOKIE['user']) || $_COOKIE['user'] == '') {
        include ('libs/login.php');
        if (isset($_POST['enter_btn'])) {
            if (validationUserNamePass($_POST['loginUserName'], $_POST['loginPassword'], 'db/user.txt', "user")) {
                setcookie("user", $_POST['loginUserName']);
            }
        } 
        else {
            include ('views/loginForm.php');
        }
    }
}

