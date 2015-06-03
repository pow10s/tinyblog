<?php
    include('views/registration.php');
    include('models/validation.php');
    if (isset($_POST['submit_btn'])) {
        $object = new ValidationFields($_POST['e-mail'],$_POST['username'], $_POST['pass']);
        if ($object->checkMail() && $object->checkUser() && $object->checkPass()) {
            include('models/usersTable.php');
            $object = new UserTable($_POST['e-mail'],$_POST['username'],$_POST['pass']);
            $object->addToTable();
        }
        else {
            echo "Incorrect types";
        }
    }