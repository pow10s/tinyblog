<?php
namespace libs;

require('../libs/DBConnector.php');
class DBModel
{
    protected $connection;

    public function __construct(){
        $this->connection = DBConnector::getConnection();
    }

    public  function add($insName,$insData)
    {
        $values = array();
        $keys =" (`".implode("`, `",array_keys($insData))."`)";
        foreach($insData as $key => $value){
            $val[] = ':' . $key ;
        }
        $values[] ='(' . implode(',', $val) . ')';
        $sql = "INSERT INTO `$insName`".$keys."VALUES".implode(',', $values);
        $stmt = $this->connection->prepare($sql);

        foreach($insData as $keyd => $valued){
            $stmt->bindParam(':'. $keyd, $valued);
        }
        $stmt->execute();
    }

    public function select($tableName,$tableData, $amtFields = 5 )
    {
        $values = implode(',', $tableData);
        $sql = "SELECT $values FROM `$tableName` LIMIT $amtFields";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }

    public function delete($tableName, $fields, $amtFields = 5)
    {
        $values = implode(',', $fields);
        $sql = "DELETE FROM `$tableName` ORDER BY $values LIMIT $amtFields";
        $stmt = $this->connection->prepare($sql);

        foreach($fields as $key=>$val){
            $stmt->bindParam(':'.$val, $val);
        }
        $stmt->execute();
    }
}
$dbModel = new DBModel();
//$dbModel->add('users', array('UserName'=>'Her', 'Password'=>'Gitler'));
$dbModel->delete('users', array('UserName'),8);