<?php
function addToTableMessages ($title, $text, $user_id){
    try {
        $db = new PDO("mysql:dbname=users;host=localhost", "root", "" );
        $stmt = $db->prepare("INSERT INTO messages (Title, Text,user_id) VALUES(:Title, :Text,:user_id)");
        $stmt->bindParam(':Title', $title);
        $stmt->bindParam(':Text', $text);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        $db = null;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

}