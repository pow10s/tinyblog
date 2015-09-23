<?php
namespace libs;

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
            $stmt->bindParam(':'.$keyd, $valued);
        }

        $stmt->execute();
    }

    public function select($tableName,$tableData, $amtFields = 5 )
    {
        $values = implode(',', array_keys($tableData));
        $val  = ':'. $values;
        $sql = "SELECT * FROM `$tableName` WHERE $values = $val ";
        $stmt = $this->connection->prepare($sql);

        foreach($tableData as $key=>$vale){
            $stmt->bindParam($val,$vale);
        }
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $data => $name){
            foreach($name as $dat => $nam){
                print_r($nam);
            }
        }
    }

    public function delete($tableName, $fields, $amtFields = 5)
    {
        $values = implode(',', array_keys($fields));
        $val = ':'. $values;
        $sql = "DELETE FROM `$tableName`WHERE $values = $val LIMIT $amtFields";
        $stmt = $this->connection->prepare($sql);

        foreach($fields as $key=>$vale){
            $stmt->bindParam($val,$vale);
        }

        $stmt->execute();
    }
}
