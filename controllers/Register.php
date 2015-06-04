<?php
    include('views/registration.php');
    include('models/validation.php');
    if (isset($_POST['submit_btn'])) {
        $validation = new ValidationFields();
        if ($validation->checkMail($_POST['e-mail'])&& $validation->checkUser($_POST['username'])&& $validation->checkPass($_POST['pass'])) {
            include('models/usersTable.php');
            $object = new UserTable($_POST['e-mail'],$_POST['username'],$_POST['pass']);
            $object->addToTable();
        }
        else {
            echo "Incorrect types";
        }
    }