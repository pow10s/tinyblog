<?php
if (isset($_COOKIE['user'])) {
    echo "You are logged";
}
else {
    include_once '../views/remindPassword.php';
    if (isset($_POST['remind_btn'])) {
        include_once('../libs/validation.php');
        if (ValidationFields::checkMail($_POST['remind_Email'])) {
            include_once('../models/reminder.php');
            $object = new PasswordByEmail($_POST['remind_Email']);
            echo "Password: " . $object->PasswordByEmail();
        } else echo "Incorrect E-mail";
    }
}