<?php
include ('config.php');
include ('libs/logger.php');
include ('views/message/create.php');
if (empty($_POST['button_message'])) {
    if (empty($_POST['nickName']))  {
        echo "Please input NICKNAME <br>";
    }
    else {
        echo $_POST['nickName'] . ': ' . $_POST['text'] ;

    }
}
    logs ('Test', PATH_TO_LOG);
