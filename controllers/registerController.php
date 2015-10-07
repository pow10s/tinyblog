<?php
class RegisterController
{
    public function actionRegister()
    {
        include('views/Register.php');
        if (isset($_POST['send_btn'])) {
            $addUsers = new \models\UserModel();
            $addUsers->addUser(array('UserName'=>$_POST['user_name'], 'Password'=>$_POST['password']));
        }
    }
}