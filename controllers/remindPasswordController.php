<?php
class RemindPasswordController
{
    public static function actionRemind()
    {
        if (isset($_COOKIE['user'])) {
            echo "You are logged";
        } else {
            include_once '../views/remindPassword.php';
            if (isset($_POST['remind_btn'])) {
                include_once('../libs/validation.php');
                if (ValidationFields::checkMail($_POST['remind_Email'])) {
                    include_once('../models/passwordByEmail.php');
                    $object = new PasswordByEmail($_POST['remind_Email']);
                    $pass = $object->getUsersPasswordByEmail();
                    if ($pass) {
                        echo "Password: " . $pass;
                    } else echo "User not found";
                } else echo "Incorrect E-mail";
            }
        }
    }
}
