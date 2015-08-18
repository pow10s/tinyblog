<?php
class DBModel{
    protected $connection;
    public function __construct(){
        $this->connection = DBConnector::getConnection();
    }
    public  function add($insName,$insData) {
        $sql = "INSERT into $insName (`Email`,`UserName`, `Password`) VALUE (:Email , :UserName, :Password)";
        $db = $this->connection;
        $stmt = $db->prepare($sql);
            $stmt->bindValue(':Email', $insData['Email']);
            $stmt->bindValue(':UserName', $insData['UserName']);
            $stmt->bindValue(':Password', $insData['Password']);
            $stmt->execute();
    }

}
$dbModel = new DBModel();
$dbModel->add('users', array('Email'=>'dimka@mail.ru', 'UserName'=>'dimas', 'Password'=>'dasdas'));

