<?php
include ('config.php');
//include ('views/message/create.php');

  if ($_GET['action']=='register') {
      include('views/registration.php');
      include('libs/validation.php');
      if (isset($_POST['submit_btn'])) {
          if (checkMail($_POST['e-mail']) == true && checkUser($_POST['username']) == true && checkPass($_POST['pass']) == true) {
              file_put_contents('db/user.txt', $_POST['e-mail'] . ';' . $_POST['username'] . ';' . $_POST['pass'] . "\r\n", FILE_APPEND);
          }

      }
  }