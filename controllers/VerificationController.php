<?php

class VerificationController
{
    public function actionVerification()
    {
        $confirm = new \libs\Confirmation();
        $confirm->checkConfirm($_GET['hash']);
    }


}
