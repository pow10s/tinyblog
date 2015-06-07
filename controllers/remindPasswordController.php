<?php
if (isset($_COOKIE['user'])) {
    echo "You are logged";
}
else {
    include_once '../views/remindPassword.php';
    if (isset($_POST['remind_btn'])){
        include_once ('../models/reminder.php');
        $object = new PasswordByEmail($_POST['remind_Email']);
        echo "Your password: " . $object->PasswordByEmail();
    }
}