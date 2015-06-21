<?php
include_once('db/DBconnection');
function viewMessage ($user_id_to){
    $db= DBconnection::getConnection();
    $stmt = $db->prepare("SELECT Title, Text FROM messages WHERE user_id_to = :user_id_to");
    $stmt->bindParam(':user_id_to', $user_id_to);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;

}
