<?php
require('../libs/DBConnector.php');
class DBModel{
    protected $connection;
    public function __construct(){
        $this->connection = DBConnector::getConnection();
    }

    public  function add($insName,$insData) {
        $values = array();
        $keys =" (`".implode("`, `",array_keys($insData))."`)";
        foreach($insData as $key => $value){
            $val[] = ':' . $key ;
        }
        $values[] ='(' . implode(',', $val) . ')';
        $db = $this->connection;
        $sql = "INSERT INTO `$insName`".$keys."VALUES".implode(',', $values);
        $stmt=$db->prepare($sql);

        foreach($insData as $keyd => $valued){
            $stmt->bindParam(':'. $keyd, $valued);
        }
        $stmt->execute();
    }
    public function select($tableName,$tableData, $amtFields = 5 ){
        $values = implode(',', $tableData);
        $db = $this->connection;
        $sql = "SELECT $values FROM `$tableName` BETWEEN 1 AND $amtFields";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    }
    public function delete($tableName, $fields){
        $values = implode(',', $fields);
        $db = $this->connection;
        $sql = "DELETE FROM `$tableName` ORDER BY $values";
        $stmt=$db->prepare($sql);
        $stmt->bindParam(':'.$values, $values);
        $stmt->execute();

    }

}
$dbModel = new DBModel();
//$dbModel->add('users', array('UserName'=>'Her', 'Password'=>'Gitler'));
$dbModel->delete('users', array('UserName'));