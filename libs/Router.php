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

        $controllerFile = ROOT .'/controllers/' . ucfirst($url[2] ).'Controller' . '.php';
        echo $controllerFile;
        if (file_exists($controllerFile)){
            include($controllerFile);
        }
    }
}
