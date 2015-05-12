<?php
include ('views/loginForm.php');
include ('libs/login.php');
    if (isset($_POST['enter_btn'])) {

    	//Що за брєд, ти перевіряєш користувача з файлика, якого в тебе нема. А треба взагалі з бази даних
          if (validationUserNamePass($_POST['loginUserName'], $_POST['loginPassword'], 'db/user.txt',"user")) {
                  setcookie("user", $_POST['loginUserName']);
          
          //А це що? Якщо кукі нема, то чому ж ми видаємо, що користувач залогінений?
          if (!isset($_COOKIE['user']) || $_COOKIE['user'] == $_POST['loginUserName']){
                          include_once 'views/loginForm.php';
                          echo 'You are logged in to your account.';
          }
     }
    }