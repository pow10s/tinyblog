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
        $stmt->bindValue(':UserName',$insData['UserName']);
        $stmt->bindValue(':Password',$insData['Password']);
        $stmt->execute();
    }

}
$dbModel = new DBModel();
$dbModel->add('users', array('UserName'=>'dimadasdasdss', 'Password'=>'dasdfgdgfdgfccas'));