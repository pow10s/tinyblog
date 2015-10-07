<?php
class RegisterController
{
    public function actionRegister()
    {
        $view = new \libs\View();
        $view->render('registration',array());
        $validation = new libs\ValidationFields();
        if (isset($_POST['submit_btn'])) {
            //if (ValidationFields::checkMail($_POST['e-mail']) && ValidationFields::checkUser($_POST['username']) && ValidationFields::checkPass($_POST['pass'])) {
                $addUsers = new \models\UserModel();
                $addUsers->addUser(array('Email'=>$_POST['e-mail'],'UserName'=>$_POST['username'], 'Password'=>$_POST['pass']));
/*                $object = new UserTable($_POST['e-mail'], $_POST['username'], $_POST['pass']);
                $object->addToTable();*/
            //} else {
              //  echo "Incorrect types";
           // }
        }
    }
}
