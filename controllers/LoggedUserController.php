<?php
class LoggedUserController
{
   public function actionLoggedUser()
   {
       if (!empty($_COOKIE['UserName'])) {
           $view = new \libs\View();
           $cookie = new \libs\Cookie();
           $view->renderPartial('loggedUser');
           if (isset($_POST['logout'])) {
               $cookie->delete('UserName');
           }
       }
   }
}