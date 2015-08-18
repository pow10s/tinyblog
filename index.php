<?php
require ('config.php');
require(ROOT.'/libs/Router.php');
require('libs/view.php');
require('libs/DBConnector.php');
require('libs/DBModel.php');
require('libs/Cookie.php');
require 'Autoloader/autoload.php';

use Autoloader\Autoload;
Autoload::autoloadRegister();
$router = new Router();
$router->run();
