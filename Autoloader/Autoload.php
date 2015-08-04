<?php
class Autoload{
    protected $classes = array();

    public function registerClass($className, $absolutePath){
        if (file_exists($absolutePath)){
            $this->classes[$className] = $absolutePath;
            return true;
        }

        return false;
    }

    public function autoloader($class){
        if(!empty($this->classes[$class])) {
            require_once $this->classes[$class];
            return true;
        }

        return false;

    }
}
