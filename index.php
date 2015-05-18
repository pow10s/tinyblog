<?php
include ('config.php');

if (isset($_GET['action'])=='register') {
    include ('controllers/Register.php');
}
if(isset($_GET['action'])=='login'){
    include ('controllers/Login.php');
}
if (isset($_GET['action'])=='search') {
    include ('controllers/Search.php');
}

