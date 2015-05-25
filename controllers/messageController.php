<?php
if (isset($_COOKIE['user'])) {
    include_once('views/message.php');
    if (isset($_COOKIE['user'])) {
        if (isset($_POST['send_btn'])) {
            if (!empty($_POST['titleName']) && !empty($_POST['message'])) {
                include_once('db/addToTableMessages.php');
                include_once('db/getUserIdByUserName.php');
                $result = getUserIdByUserName($_COOKIE['user']);
                if ($result != $_POST['users_list']) {
                    addToTableMessages($_POST['titleName'], $_POST['message'], $result, $_POST['users_list']);
                } else {
                    echo "You cant send message oneself";
                }
            } else {
                echo "Type Title or Message";
            }
        }
    } else {
        echo "Please, login to the site";
    }
}
else {
    include_once('libs/siteutils.php');
    Redirect('http://localhost/projs/tinyblog/index.php?action=login', false);
}