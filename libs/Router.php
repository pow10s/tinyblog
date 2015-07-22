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
        $controller = ucfirst(array_shift($url));
        $action = ucfirst(array_shift($url));
        $controllerFile = ROOT . '/controllers/' . $controller . '.php';
        if (file_exists($controllerFile)){
            include($controllerFile);
        }
        else echo $controllerFile;

    }
}
