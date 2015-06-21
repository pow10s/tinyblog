<?php
include_once('db/DBconnection.php');
class UserTable
{
    private $email;
    private $userName;
    private $password;

    public function getEmail()
    {
        return $this->email;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function __construct($email, $userName, $password)
    {
        $this->email = $email;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function addToTable()
    {
        try {
            $db= DBconnection::getConnection();
            $stmt = $db->prepare("INSERT INTO users (Email, userName, Password) VALUES(:Email, :userName, :Password)");
            $stmt->bindParam(':Email', $this->email);
            $stmt->bindParam(':userName', $this->userName);
            $stmt->bindParam(':Password', $this->password);
            $stmt->execute();
            $db = null;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
