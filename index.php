<?php
include ('config.php');
//include ('views/message/create.php');
$file = fopen('db/user.txt', 'a');
  if ($_GET['action']=='register') {
      include('views/registration.php');
      include('libs/validation.php');
      if (isset($_POST['submit_btn'])) {
          if (checkMail($_POST['e-mail']) == 'TRUE' && checkUser($_POST['username']) == 'TRUE' && checkPass($_POST['pass']) == 'TRUE') {
              fputs($file, $_POST['e-mail'] . ';' . $_POST['username'] . ';' . $_POST['pass'] . "\r\n");
          }
          fclose($file);
      }
  }