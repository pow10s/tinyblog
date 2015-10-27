<?php

class LoginController
{
    public function actionLogin()
    {
        if (empty($_COOKIE['UserName'])) {
            $view = new \libs\View();
            $view->renderPartial('login');
            if (isset($_POST['login_send_btn'])) {
                $selectLoginAndPass = new \models\UserModel();
                $hashPass = new \libs\Hashing();
                $cookie = new \libs\Cookie();
                $hashPass->setSalt('942c916c16bf1f03dc157290d30d6312');
                $res = $hashPass->hash($_POST['log_password']);
                try {
                    $login = $selectLoginAndPass->selectUser(array('UserName' => $_POST['log_user_name']));
                    $pass = $selectLoginAndPass->selectUser(array('Password' => $res), 1);
                    if (isset($login[0][0]) == $_POST['log_user_name'] && (isset($pass[0][0]) == $res)) {
                        $cookie->create('UserName', $_POST['log_user_name']);
                    } else echo 'Incorrect data input';
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
        } else echo 'Already logged';
    }
}