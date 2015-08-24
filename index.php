<?php
require ('config.php');
require('libs/view.php');
require('libs/DBConnector.php');
require('libs/Cookie.php');
require 'Autoloader/autoload.php';

Autoloader\Autoload::autoloadRegister();

$router = new libs\Router();
$router->run();

$dbModel = new libs\DBModel();
$dbModel->add('users', array('UserName'=>'dimas', 'Password'=>'dasdas'));