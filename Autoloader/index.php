<?php
require_once '../Autoloader/autoload.php';

use Autoloader\Autoload\Autoload;
use Autoloader\Test;

Autoload::autoloadRegister();

$test = new Test;