<?php
class LogoutController
{
    public function actionLogout()
    {
        if (isset($_COOKIE['user']) && isset($_POST['logout_btn'])) {
            Cookie::deleteCookie($_COOKIE['user']);
        }
    }
}
