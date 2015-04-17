<?php
function addUsersIntoDB($email, $login, $password)
{
    $db = new PDO('mysql:host=localhost;dbname=users', 'root', '');
    $stmt = $db->prepare("INSERT INTO users (email,login,password) VALUES (:email, :login, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
}