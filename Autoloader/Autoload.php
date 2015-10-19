<?php
namespace Autoloader;

class Autoload
{
    private static $loadedFilename;

    public static function loadClass($className) {
        $pathParts = explode('_', $className);
        self::$loadedFilename = ROOT.'/'.implode(DIRECTORY_SEPARATOR, $pathParts) . '.php';
        require_once(self::$loadedFilename);
    }

    public static function autoloadRegister() {
        spl_autoload_register('self::loadClass');
    }
}