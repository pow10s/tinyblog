<?php
class RegisterController
{
    public function actionRegister()
    {
        $view = new \libs\View();
        $view->renderPartial('register');
        if (isset($_POST['send_btn'])) {
            $addUsers = new \models\UserModel();
            $hash = new \libs\Hashing();
            $result = $hash->hash($_POST['user_name']);
            $addUsers->addUser(array('Email'=>$_POST['email'],'UserName'=>$_POST['user_name'], 'Password'=>$result));
        }
    }
}