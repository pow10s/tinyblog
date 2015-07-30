<?php
class RegisterController
{
    public static function actionRegister()
    {
        include('views/registration.php');
        include('libs/validation.php');
        if (isset($_POST['submit_btn'])) {
            if (ValidationFields::checkMail($_POST['e-mail']) && ValidationFields::checkUser($_POST['username']) && ValidationFields::checkPass($_POST['pass'])) {
                include('models/usersTable.php');
                $object = new UserTable($_POST['e-mail'], $_POST['username'], $_POST['pass']);
                $object->addToTable();
            } else {
                echo "Incorrect types";
            }
        }
    }
}
