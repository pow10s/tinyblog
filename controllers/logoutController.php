<?php
class LogoutController
{
    public function actionLogout()
    {
        if (isset($_COOKIE['user']) && isset($_POST['logout_btn'])) {
            include_once('libs/Helper.php');
            Helper::deleteCookie();
        }
    }
}
