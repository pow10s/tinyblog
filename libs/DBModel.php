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
        $data[] = implode(',',$val);
        $dat = implode(',',$data);
        $import = implode(',',$insData);
        $stmt->bindParam($dat,$import);
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
                return $nam;
            }
        }
    }

    public function delete($tableName, $fields, $amtFields = 5)
    {
        $values = array();
        $keys =implode(",",array_keys($fields));

        foreach($fields as $key => $value){
            $val[] = ':' . $key ;
        }

        $values[] =implode(',', $val);
        $field =  implode(',',$fields);
        $va = implode(',',$values);
        echo $sql = "DELETE FROM `$tableName`WHERE $keys = ".$va . "  LIMIT $amtFields";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam($va,$field);
        $stmt->execute();
    }
}

