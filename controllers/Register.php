<?php
    include('views/registration.php');
    include('libs/validation.php');
    include('db/addUsers.php');
    if (isset($_POST['submit_btn'])) {
        if (checkMail($_POST['e-mail']) == true && checkUser($_POST['username']) == true && checkPass($_POST['pass']) == true) {
            addUsersIntoDB($_POST['e-mail'],$_POST['username'] ,$_POST['pass']);
            echo 'Thank you for registering.';
        }
        else {
            echo 'Invalid input.';
        }
    }
