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
        $message = new \libs\Message();
        if (empty($_COOKIE['UserName'])) {
            $view->render('login');

            if (isset($_POST['login_send_btn'])) {
                $hashPass->setSalt(SALT);
                $hash = $hashPass->hash($_POST['log_password']);

                try {
                    $userData = $selectLoginAndPass->selectUser(array('user_name', 'password'), 'user_name = :name AND password = :pass', array(':name' => $_POST['log_user_name'], ':pass' => $hash));

                        if ($userData[0]['user_name'] == $_POST['log_user_name'] && $userData[0]['password'] == $hash) {
                            $cookie->create('user_name', $_POST['log_user_name'], 3600);
                            $message->sendMessage('Thanks');
                        } else {
                            $message->sendMessage('user doesnt exist');
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