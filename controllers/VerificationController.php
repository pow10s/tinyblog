<?php

class VerificationController
{
    public function actionVerification()
    {
        $confirm = new \libs\Confirmation();
        echo $_GET['hash'];
        $confirm->checkConfirm($_GET['hash']);
    }


}
