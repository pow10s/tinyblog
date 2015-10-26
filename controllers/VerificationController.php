<?php
class VerificationController
{
    public function actionVerification()
    {
        $verification = new \libs\Confirmation();
        $verification->checkConfirm($_GET['hash']);
    }
}