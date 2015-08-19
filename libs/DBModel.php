<?php
class DBModel{
    protected $connection;
    public function __construct(){
        $this->connection = DBConnector::getConnection();
    }
    public  function add($insName,$insData) {

        $keys =" (`".implode("`, `",array_keys($insData))."`)";
        $values= " VALUES ('".implode("', '", $insData)."') ";
        $db = $this->connection;
        $sql = "INSERT INTO `$insName`". "$keys"."$values";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    }

}
$dbModel = new DBModel();
$dbModel->add('users', array('UserName'=>'dimas', 'Password'=>'dasdas'));

