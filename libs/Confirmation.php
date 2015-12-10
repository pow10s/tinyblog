<?php
namespace libs;

class Confirmation
{
    public function checkConfirm($hash)
    {
<<<<<<< HEAD
        $hashCheck = new \models\UserModel();
        $selectedHash = $hashCheck->selectUser(array('verificationCode'), 'verificationCode = :verification', array(':verification' => $hash));
        
        if (isset($selectedHash[0])) {
            if ($selectedHash[0]['verificationCode'] == $hash) {
                $hashCheck->deleteUser(array('verificationCode' => $hash));
=======
        $hashCheck = new DBModel();
        $selectedHash = $hashCheck->select('verification_table',array('verification_code'), 'verification_code = :verification', array(':verification' => $hash));
            if ($selectedHash[0]['verification_code'] == $hash) {
                $hashCheck->delete('verification_table',array('verification_code' => $hash));
>>>>>>> 5688f428c80e711d638b334a4605d22bd83d65b0
                header("Location: " . BASE_URL . '/login/login');
                die();
            } else {
                echo 'Link already confirmed';
            }

    }
}
