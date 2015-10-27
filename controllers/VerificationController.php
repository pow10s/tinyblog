<?php

class VerificationController
{

        public function actionVerification($hash)
        {
            $hashCheck = new \models\UserModel();
            $res = $hashCheck->selectUser(array('verificationCode' => $hash));
            if (isset($res[0][0]) == $hash) {
                header("Location: http://tinyblog.dev/login/login");
                die();
            } else echo 'Link already confirmed';
        }
}