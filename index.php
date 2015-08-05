<?php
include ('config.php');
require_once(ROOT.'/libs/Router.php');
require_once('db/DBconnection.php');
require_once('views/menu.php');
require_once('libs/Cookie.php');
require_once 'Autoloader/autoload.php';

use Autoloader\Autoload\Autoload;
use libs\TestFile;
use models\TestFileModels;

Autoload::autoloadRegister();
$test = new TestFile;
$testModels = new TestFileModels();
/*Starting routing*/

$router = new Router();
$router->run();
