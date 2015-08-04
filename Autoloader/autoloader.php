<?php
require_once '../config.php';
$path =  ROOT.'\Autoloader\Autoload.php';
require_once $path;
$autoload = new Autoload();
spl_autoload_register(array($autoload, 'autoload'));

$autoload->registerClass('Test', ROOT . '/libs/TestFile.php');
