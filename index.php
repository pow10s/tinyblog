<?php
require('config.php');
require('Autoloader/Autoload.php');
Autoloader\Autoload::autoloadRegister();
$router = new libs\Router();
$router->run();