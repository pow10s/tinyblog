<?php
class PasswordByEmail
{
    private $email;

    public function getEmail()
    {
        return $this->email;
    }

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function getUsersPasswordByEmail()
    {
        $db = new PDO("mysql:dbname=users;host=localhost", "root", "");
        $stmt = $db->prepare("SELECT Password FROM users WHERE Email=? ");
        $stmt->bindValue(1, $this->email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!empty ($result)){
            return $result[0]['Password'];
        }
        else return false;

    }
}
