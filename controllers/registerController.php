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
                $message = new \libs\Message();
                $addVierificationInTable = new \libs\DBModel();

                $hasher->setSalt(SALT);
                $result = $hasher->hash($_POST['password']);
                $hashConfirm = $hasher->hash($_POST['user_name']);

                if (isset($res[0][0]) != $result) {
                    $users->addUser(array('email' => $_POST['email'], 'user_name' => $_POST['user_name'], 'password' => $result));
                    $addVierificationInTable->add('verification_table',array('verification_code'=>$hashConfirm));
                    $mail->From = "stosdima@gmail.com";
                    $mail->FromName = "Stos Dima";
                    $mail->addAddress($_POST['email'], $_POST['user_name']);
                    $mail->isHTML(true);
                    $mail->Subject = "";
                    $mail->Body = "<p>" . "<a href = " . BASE_URL . '/Verification/Verification' . '?hash=' . $hashConfirm . ">" . 'Click' . "</a>" . "</p>";
                    $mail->AltBody = "Please confirm adress:";

                    if (!$mail->send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    } else {
                        $message->sendMessage('Message has been sent successfully');

                    }

                }
            }
        }
    }
}
