<?php
namespace libs;

class Confirmation
{
    public function checkConfirm($hash)
    {
        $hashCheck = new \models\UserModel();
        $res = $hashCheck->selectUser(array('verificationCode'=>$hash));
        if(isset($res[0][0])==$hash)
        {
            $hashCheck->deleteUser(array('verificationCode'=>$hash));
            header("Location: ".BASE_URL.'/login/login');
            die();
        } else echo 'Link already confirmed';
    }
}