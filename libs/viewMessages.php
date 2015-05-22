<?php
function viewMessage ($user_id_to){
    $db = new PDO("mysql:dbname=users;host=localhost", "root", "" );
    $stmt = $db->prepare("SELECT Title, Text FROM messages WHERE user_id_to = :user_id_to");
    $stmt->bindParam(':user_id_to', $user_id_to);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $key =>$value){
        echo ("Title: ".$value['Title']."<br>"."Text: ".$value['Text']."<br>");
    }

}
