<?php
require_once('Autoloader.php');
spl_autoload_register(array('Autoloader', 'loadPackages'));
var_dump(spl_autoload_functions());

spl_autoload_extensions(".php");
spl_autoload_register();
