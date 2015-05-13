<?php
    include('views/registration.php');
    include('libs/validation.php');
    if (isset($_POST['submit_btn'])) {
        if (checkMail($_POST['e-mail']) && checkUser($_POST['username']) && checkPass($_POST['pass'])) {
            include('db/addToTable.php');
            addToTable($_POST['e-mail'], $_POST['username'], $_POST['pass']);
        }
    }


