<?php
include ('config.php');

if ($_GET['action']=='register') {
    include ('controllers/Register.php');
}
if($_GET['action']=='login'){
    include ('controllers/Login.php');
}
if ($_GET['action']=='search') {
    include ('controllers/Search.php');
}

