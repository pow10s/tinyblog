<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include ('config.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'register') {
        include('controllers/Register.php');
    }
    if ($_GET['action'] == 'login') {
        include('controllers/Login.php');
    }
    if ($_GET['action']=='createmessage') {
        include ('controllers/messageController.php');
    }
    if ($_GET['action']=='viewmessages'){
        include('controllers/viewMessagesController.php');
    }
}