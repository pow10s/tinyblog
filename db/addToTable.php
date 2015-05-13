<?php
function addToTable ($email, $userName, $password){
    try {
        $db = new PDO("mysql:dbname=users;host=localhost", "root", "" );
        $stmt = $db->prepare("INSERT INTO users (Email, userName, Password) VALUES(:Email, :userName, :Password)");
        $stmt->bindParam(':Email', $email);
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':Password', $password);
        $stmt->execute();
        $db = null;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }


}