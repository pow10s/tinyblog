<?php

class FileController
{
    public function actionUploadFile()
    {
        if (!empty($_COOKIE['user_name'])) {
            $view = new \libs\View();
            $view->render('importUsersFromXml');
            if (isset($_POST['upload_btn'])) {
                \libs\FileHelper::uploadFile(PATH_TO_UPLOADS, 'filename');
            }
        }
    }

    public function actionAddInTable()
    {
        if (!empty($_COOKIE['user_name'])) {
            $view = new \libs\View();
            $view->render('importUsersInTable');
            $addToTable = new \libs\FileHelper();
            $addToTable->parseXmlFile(PATH_TO_UPLOADS, $_POST['text_file_name']);
        }
    }

}