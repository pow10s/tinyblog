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

    public function PasswordByEmail()
    {
        $db = new PDO("mysql:dbname=users;host=localhost", "root", "");
        $stmt = $db->prepare("SELECT Password FROM users WHERE Email=? ");
        $stmt->bindValue(1, $this->email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result[0]['Password'];

    }
}
