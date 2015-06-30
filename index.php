<?php
include ('config.php');
require_once('db/DBconnection.php');
require_once('views/menu.php');
include('controllers/logout.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'register') {
        include('controllers/Register.php');
    }
    if ($_GET['action'] =='login') {
        include('controllers/Login.php');
    }
    if ($_GET['action']=='createmessage') {
        include ('controllers/messageController.php');
    }
    if ($_GET['action']=='viewmessages'){
        include('controllers/viewMessagesController.php');
    }
    if ($_GET['action']=='logout'){
        include('controllers/logout.php');
    }
}
