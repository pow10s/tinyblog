<?php
require('config.php');
require('Autoloader/autoload.php');
Autoloader\Autoload::autoloadRegister();
$view = new libs\View();
$router = new libs\Router();
$router->run();
$cookie = new libs\Cookie();
$dbModel = new \libs\DBModel();

try {
    $dbModel->add('users', array('UserName' => 'kvaka', 'Password' => '23213'));
}catch(Exception $e){
    echo $e->getMessage();
}

/*try {
    $result =  $dbModel->select('users',array('UserName'=>'stosdima'), 1);
    print_r($result);
}catch(Exception $e){
    echo $e->getMessage();
}

try {
    $dbModel->delete('users',array('UserName' =>'stosdima'), 1);
}catch(Exception $e){
    echo $e->getMessage();
}*/



