<?php

class RegisterController
{
    public function actionRegister()
    {
        if (empty($_COOKIE['UserName'])) {
            $view = new \libs\View();
            $view->render('register');
            if (isset($_POST['send_btn'])) {
                $hasher = new \libs\Hashing();
                $users = new \models\UserModel();
                $mail = new PHPMailer();
                $hasher->setSalt('942c916c16bf1f03dc157290d30d6312');
                $result = $hasher->hash($_POST['password']);
                $hashConfirm = $hasher->hash($_POST['user_name']);
                if (isset($res[0][0]) != $result) {

                    $users->addUser(array('Email' => $_POST['email'], 'UserName' => $_POST['user_name'], 'Password' => $result, 'verificationCode' => $hashConfirm));
                    $mail->From = "stosdima@gmail.com";
                    $mail->FromName = "Stos Dima";
                    $mail->addAddress($_POST['email'], $_POST['user_name']);
                    $mail->isHTML(true);
                    $mail->Subject = "";
                    $mail->Body = "<p>" . "<a href = " . BASE_URL . '/Verification/Verification' . '?hash=' . $hashConfirm . ">" . 'Please click on link:' . "</a>" . "</p>";
                    $mail->Body = "<p>" . "<a href='http://tinyblog.dev/Verification/Verification'>$hashConfirm</a>" . "</p>";
                    $mail->AltBody = "Please confirm adress:";
                    if (!$mail->send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    } else {
                        echo "Message has been sent successfully";
                    }

                }
            }
        }
    }
}
