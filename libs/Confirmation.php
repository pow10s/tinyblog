<?php
namespace libs;

class Confirmation
{
    public function checkConfirm($hash)
    {
        $hashCheck = new \models\UserModel();
        $selectedHash = $hashCheck->selectUser(array('verificationCode'=>$hash));

        if(isset($selectedHash)) {
            if($selectedHash == $hash) {
                $hashCheck->deleteUser(array('verificationCode' => $hash));
                header("Location: " . BASE_URL . '/login/login');
                die();
            }else echo 'Link already confirmed';
        }
    }
}