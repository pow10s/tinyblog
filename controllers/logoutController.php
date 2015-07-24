<?php
if (isset($_COOKIE['user']) && isset($_POST['logout_btn'])) {
    unset($_COOKIE['user']);
    setcookie('user', '', time() - 3600, '');
}
