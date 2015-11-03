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
               $cookie->delete('UserName', $_COOKIE['UserName']);
           }
   }
}