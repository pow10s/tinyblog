<?php
function addToTableMessages ($title, $text, $user_id_from, $user_id_to){
    try {
        $db = new PDO("mysql:dbname=users;host=localhost", "root", "" );
        $stmt = $db->prepare("INSERT INTO messages (Title, Text, user_id_from, user_id_to) VALUES(:Title, :Text,:user_id_from, :user_id_to)");
        $stmt->bindParam(':Title', $title);
        $stmt->bindParam(':Text', $text);
        $stmt->bindParam(':user_id_from', $user_id_from);
        $stmt->bindParam(':user_id_to', $user_id_to);
        $stmt->execute();
        $db = null;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

}