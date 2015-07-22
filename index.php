<?php
include ('config.php');
require_once(ROOT.'/libs/Router.php');
require_once('db/DBconnection.php');
require_once('views/menu.php');

/*Starting routing*/

$router = new Router();
$router->run();
