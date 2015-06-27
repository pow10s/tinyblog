<?php
include_once('config.php');
class DBconnection{
    static private $connection;
    static public function getConnection(){
    if (self::$connection==null){
        self::$connection = new PDO("mysql:dbname=".DB_NAME.";"."host=".DB_HOST,DB_USER, DB_PASS );

    }
        return self::$connection;
}
}
