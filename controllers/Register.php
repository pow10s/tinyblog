<?php
    include('views/registration.php');
    include('libs/validation.php');
    if (isset($_POST['submit_btn'])) {
        if (checkMail($_POST['e-mail']) && checkUser($_POST['username']) && checkPass($_POST['pass'])) {
            include('models/usersTable.php');
            $object = new UserTable($_POST['e-mail'],$_POST['username'],$_POST['pass']);
            $object->addToTable();
        }
    }