<?php
require('config.php');
require('Autoloader/autoload.php');
Autoloader\Autoload::autoloadRegister();
$view = new libs\View();
$router = new libs\Router();
$router->run();
$cookie = new libs\Cookie();
$dbModel = new \libs\DBModel();
$dbModel->add('users', array('UserName'=>'stosdima', 'Password'=>'23213', 'Email'=>'stsodima@gmail.com'));
//$result =  $dbModel->select('users',array('UserName'=>'stosdima'), 1);
//print_r($result);
//$dbModel->delete('users',array('UserName' =>'stosdima'), 1);