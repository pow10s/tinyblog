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
        $controller = ucfirst(array_shift($url));
        $action = ucfirst(array_shift($url));
        $segments = $url;
        $controllerFile = ROOT .'/controllers/' . $controller .'Controller' . '.php'.'/'.$action;
        echo $controllerFile;
        if (file_exists($controllerFile)){
            include($controllerFile);
        }
        if (!is_callable(array($controller,$action))){
            echo 'Not Found';
        }
         call_user_func_array($controller,$action);


    }
}
