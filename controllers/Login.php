<?php
include ('views/loginForm.php');
include ('libs/login.php');
    if (isset($_POST['enter_btn'])) {
          if (validationUserNamePass($_POST['loginUserName'], $_POST['loginPassword'], 'db/user.txt',"user")) {
                  setcookie("user", $_POST['loginUserName']);
          if (!isset($_COOKIE['user']) || $_COOKIE['user'] == $_POST['loginUserName']){
                          include_once 'views/loginForm.php';
                          echo 'You are logged in to your account.';
          }
     }
    }