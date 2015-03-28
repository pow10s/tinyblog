<?php
//include ('config.php');
//include ('views/message/create.php');
  if ($_GET['action']=='register'){
      include ('views/registration.php');
      include ('libs/validation.php');
      if (isset($_POST['submit_btn'])) {
          checkMail($_POST['e-mail']);
          checkUser($_POST['username']);
          checkPass($_POST['pass']);

      }
  }
