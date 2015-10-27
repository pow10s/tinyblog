<?php

class MenuController
{
   public function actionMenu()
{
    $view = new \libs\View();
    if (empty($_COOKIE['UserName'])) {
        $view->renderPartial('menu');

    }else{
        $view->renderPartial('loggedUser');
    }

}
}