<?php
class AddUserController
{
    public function actionAddUser()
    {
        $view= new \libs\View();
        $view->render('addUser');
        if(isset($_POST['add_user_btn'])) {
            $addUser = new \models\UserModel();
            $addUser->addUser(['email'=>$_POST['add_email'],'user_name'=>$_POST['add_login'],'password'=>$_POST['add_password']]);
            }
    }
}