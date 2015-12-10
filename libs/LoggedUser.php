<?php
namespace libs;

class LoggedUser
{

    public function actionLogg()
    {
        $view = new \libs\View();
        $cookie = new \libs\Cookie();
        $view->render('loggedUser');

        if (isset($_POST['logout'])) {
            $cookie->delete('user_name', $_COOKIE['user_name']);
        }
    }
}