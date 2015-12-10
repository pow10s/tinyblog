<?php
namespace libs;

class Confirmation
{
    public function checkConfirm($hash)
    {
        $hashCheck = new DBModel();
        $selectedHash = $hashCheck->select('verification_table',array('verification_code'), 'verification_code = :verification', array(':verification' => $hash));
            if ($selectedHash[0]['verification_code'] == $hash) {
                $hashCheck->delete('verification_table',array('verification_code' => $hash));
                header("Location: " . BASE_URL . '/login/login');
                die();
            } else {
                echo 'Link already confirmed';
            }

    }
}
