<?php
class RegisterController
{
    public function actionRegister()
    {
        $view = new \libs\View();
        $view->renderPartial('register');
        if (isset($_POST['send_btn'])) {
            $hasher = new \libs\Hashing();
            $users = new \models\UserModel();
            $mail = new PHPMailer();
            $hasher->setSalt('942c916c16bf1f03dc157290d30d6312');
            $result = $hasher->hash($_POST['password']);
            $res = $users->selectUser(array('password' => $result), 1);
            if (isset($res[0][0]) != $result)
            {

                $users->addUser(array('Email'=>$_POST['email'],'UserName'=>$_POST['user_name'], 'Password'=>$result));
                $mail->From = "tinyblog.dev";
                $mail->FromName = 'Anaconda';
                $mail->addAddress($_POST['email'], $_POST['user_name']);
                if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }else {
                    echo "Message has been sent successfully";
                   }
               }


            }else{
                echo 'exist in db';
            }
        }
    }