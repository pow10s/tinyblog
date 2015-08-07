<?php
include ('config.php');
require_once(ROOT.'/libs/Router.php');
require_once('libs/view.php');
require_once('db/DBconnection.php');
require_once('libs/Cookie.php');
require_once 'Autoloader/autoload.php';

use Autoloader\Autoload;
Autoload::autoloadRegister();
$router = new Router();
$router->run();


