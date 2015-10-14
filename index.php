<?php
require('config.php');
require('Autoloader/Autoload.php');
Autoloader\Autoload::autoloadRegister();
$router = new libs\Router();
$router->run();
echo "<link href='/css/style.css' rel='stylesheet'>";
echo "<script type='text/javascript' src='/scripts/jquery-2.1.4.min.js'>"."</script>";
echo "<script type='text/javascript' src='/scripts/jquery.validate.min.js'>"."</script>";
echo "<script type='text/javascript' src='/scripts/main.js'>"."</script>";