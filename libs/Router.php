<?php
class Router
{
    public function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run(){
        $url = $this->getURI();
        $url = explode('/', $url);
        print_r($url);
        $controller = ucfirst(array_pop($url)) . 'Controller';
        $action ='action' . ucfirst(array_pop($url));
        $controllerFile = ROOT .'/controllers/' . $controller . '.php';
        echo $controllerFile;
        if (file_exists($controllerFile)){
            include($controllerFile);
        call_user_func(array($controller, $action));
        }
    }
}
