<?php
namespace Autoloader\Autoload;

class Autoload {
    private static $loadedFilename;

    public static function loadClass($className) {
        include_once('../config.php');
        $pathParts = explode('_', $className);
        self::$loadedFilename = implode(DIRECTORY_SEPARATOR, $pathParts) . '.php';
        require_once(self::$loadedFilename);
    }
    public static function autoloadRegister() {
        spl_autoload_register('self::loadClass');
    }
}