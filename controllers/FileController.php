<?php

class FileController
{
    public function actionUploadFile()
    {
        $message = new \libs\Message();
        if (!empty($_COOKIE['user_name'])) {
            $view = new \libs\View();
            $view->render('importUsersFromXml');
            if (isset($_POST['upload_btn'])) {
                \libs\FileHelper::uploadFile(PATH_TO_UPLOADS, 'filename');
                $message->sendMessage('File added');
            }
        } else {
            $message->sendMessage('Please,login');
        }
    }

    public function actionAddInTable()
    {
        $message = new \libs\Message();
        if (!empty($_COOKIE['user_name'])) {
            $view = new \libs\View();
            $view->render('importUsersInTable');
            if (isset($_POST['import_btn'])) {
                $addToTable = new \libs\FileHelper();
                $addToTable->parseXmlFile(PATH_TO_UPLOADS, $_POST['text_file_name']);
            }
        } else {
            $message->sendMessage('Please,login');
        }
    }

}