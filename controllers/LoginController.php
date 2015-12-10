<?php

class LoginController
{
    public function actionLogin()
    {

        $logg = new \libs\LoggedUser();
        $view = new \libs\View();
        $selectLoginAndPass = new \models\UserModel();
        $hashPass = new \libs\Hashing();
        $cookie = new \libs\Cookie();

        if (empty($_COOKIE['UserName'])) {
            $view->render('login');

            if (isset($_POST['login_send_btn'])) {
                $hashPass->setSalt(SALT);
                $hash = $hashPass->hash($_POST['log_password']);

                try {
                    $userData = $selectLoginAndPass->selectUser(array('UserName', 'Password'), 'UserName = :name AND Password = :pass', array(':name' => $_POST['log_user_name'], ':pass' => $hash));

                        if ($userData[0]['UserName'] == $_POST['log_user_name'] && $userData[0]['Password'] == $hash) {
                            $cookie->create('UserName', $_POST['log_user_name'], 3600);
                            echo 'Thanks';
                        } else {
                            echo 'user doesnt exist';
                        }

                } catch (Exception $e) {

                    echo $e->getMessage();
                }
            }

        } else {
            $logg->actionLogg();
        }
    }
}