<?php
if (isset($_COOKIE['user'])) {
    include_once ('views/message.php');
    if (isset($_POST['send_btn'])) {
        include_once('db/addToTableMessages.php');
        include_once ('db/getUserIdByUserName.php');
        $result = getUserIdByUserName ($_COOKIE['user']);
        addToTableMessages($_POST['titleName'], $_POST['message'], $result);
    }
}
else {
   echo "Please, login to the site";
}