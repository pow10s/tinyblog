<?php
class DBModel {
    protected $connection;
    public function __construct($connection){
        $this->connection = DBConnector::getConnection();
    }
    public function add($insName,$insData){
        $columns = implode(", ",array_keys($insData));
        $escaped_values = array_map('mysql_real_escape_string', array_values($insData));
        $values  = implode(", ", $escaped_values);
        $sql = "INSERT INTO `$insName`($columns) VALUES ($values)";
    }

}
$DBModel = new DBModel();
$DBModel->add('users', array('email' => 'vula12@mail.ru', 'UserName' => 'lopata', 'password' => 'droid');
