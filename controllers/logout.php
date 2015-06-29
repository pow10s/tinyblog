<?php
if (isset($_COOKIE['user']) && isset($_POST['logout_btn'])) {
    include_once('views/menu.php');
    unset($_COOKIE['user']);
    setcookie('user', '', time() - 3600, '/');
}
