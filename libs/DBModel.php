<?php
namespace libs;
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
        $stmt = $db->prepare($sql);
        foreach($insData as $key => $name){
            $stmt->bindValue('$key', $name);
        }
        $stmt->execute();
    }

}
