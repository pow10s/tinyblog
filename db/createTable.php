<?php
try {
    $db = new PDO("mysql:dbname=users;host=localhost", "root", "" );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("set names utf8");
    $table= "users";
    $columns = "ID INT( 20 ) AUTO_INCREMENT PRIMARY KEY,
Email VARCHAR( 50 ) NOT NULL,
UserName VARCHAR( 50 ) NOT NULL,
Password VARCHAR( 150 ) NOT NULL " ;
    $db->exec("CREATE TABLE IF NOT EXISTS users.$table ($columns)");
    $db = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>