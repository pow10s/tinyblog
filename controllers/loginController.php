<?php
class LoginController
{
    public function actionLogin()
    {
        if (isset($_COOKIE['user'])) {
            echo "You are logged";
        } else {

            $view = new View();
            $view->render('loginForm',array());
            if (isset($_POST['enter_btn'])) {
                include('db/selectFromTable.php');
                if (selectFromTable($_POST['loginUserName'], $_POST['loginPassword'])) {
                    Cookie::setCookie('user',$_POST['loginUserName']);
                    echo "Welcome to the site";
                } else echo "User not found";

            }
        }
    }
    private function getArray(){
        $users = array('users'=>array('name'=>'petya','age'=>'13','adress'=>'pops.com'),
                                 array('name'=>'dima','age'=>'18','adress'=>'polt.com'),
                                 array('name'=>'vasya','age'=>'51','adress'=>'niko.com'),
                                 array('name'=>'yurka','age'=>'23','adress'=>'prosp.com'),
                                 array('name'=>'ignat','age'=>'18','adress'=>'sht.com')
                );
            return $users;

    }

    public function actionViewAllUsers(){

        $view = new View();
        $users = $this->getArray();
        $view->renderPartial('viewUsers',array('users' => $users));
    }
}

