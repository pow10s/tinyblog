<?php
class RegisterController
{
    public function actionRegister()
    {
        $view = new \libs\View();
        $view->renderPartial('register');
        if (isset($_POST['send_btn'])) {
            $addUsers = new \models\UserModel();
            $addUsers->addUser(array('Email'=>$_POST['email'],'UserName'=>$_POST['user_name'], 'Password'=>$_POST['password']));
        }
    }
}