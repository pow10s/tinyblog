<?php
require('config.php');
require('Autoloader/Autoload.php');
Autoloader\Autoload::autoloadRegister();
$router = new libs\Router();
<<<<<<< HEAD
$router->run();
=======
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



>>>>>>> 7a9b8673c11e6f9e1bd493f228545f2180355010
