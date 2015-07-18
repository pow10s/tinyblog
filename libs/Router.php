<?php
class Router {

    public static function parseUrl(){
        $routeArray = explode('/', $_SERVER['REQUEST_URI']);
        $route = array();
        foreach ($routeArray as $value) {
            if (!empty($value)) {
                $route[] = trim($value);
            }

        }
        print_r($route);
}
}
Router::parseUrl();