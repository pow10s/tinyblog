<?php
namespace libs;

class Confirmation
{
    public function checkConfirm($hash)
    {
        $hashCheck = new \models\UserModel();
        $selectedHash = $hashCheck->selectUser(array('verification_code'), 'verification_code = :verification', array(':verification' => $hash));
        if (isset($selectedHash[0])) {
            if ($selectedHash[0]['verification_code'] == $hash) {
                $hashCheck->deleteUser(array('verification_code' => $hash));
                header("Location: " . BASE_URL . '/login/login');
                die();
            } else {
                echo 'Link already confirmed';
            }
        }
    }
}
