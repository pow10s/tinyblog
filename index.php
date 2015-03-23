<?php
include ('config.php');
include ('views/message/create.php');
if (empty($_POST['btn_message'])) {
    if (empty($_POST['nickName']))  {
        echo 'Please input NICKNAME';
    }
    else {
        echo $_POST['nickName'] . ': ' . $_POST['text'] ;

    }
}

