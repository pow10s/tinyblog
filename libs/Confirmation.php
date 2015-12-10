<?php
namespace libs;
ob_start();
class Confirmation
{
    public function checkConfirm($hash)
    {
        $hashCheck = new \models\UserModel();
        $selectedHash = $hashCheck->selectUser(array('verificationCode'), 'verificationCode = :verification', array(':verification' => $hash));
        
        if (isset($selectedHash[0])) {
            if ($selectedHash[0]['verificationCode'] == $hash) {
                $hashCheck->deleteUser(array('verificationCode' => $hash));
                header("Location: " . BASE_URL . '/login/login');
                die();
            } else {
                echo 'Link already confirmed';
            }
        }
    }
}
