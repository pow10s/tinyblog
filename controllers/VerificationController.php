<?php
class VerificationController
{
<<<<<<< HEAD
    public function actionVerification()
    {
        $verification = new \libs\Confirmation();
        $verification->checkConfirm($_GET['hash']);
=======
    public function actionVerification($hash)
    {
        $hashCheck = new \models\UserModel();
        $res = $hashCheck->selectUser(array('verificationCode'=>$hash));
        if(isset($res[0][0])==$hash){
            header("Location: http://tinyblog.dev/login/login");
            die();
        } else echo 'Link already confirmed';
>>>>>>> 753d555d37796836c5f65ce726000812cacd935c
    }
}