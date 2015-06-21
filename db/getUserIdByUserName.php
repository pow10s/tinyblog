<?php
include_once ('db/DBconnection.php');
function getUserIdByUserName ($userName)
{
    $db= DBconnection::getConnection();
    $stmt = $db->prepare("SELECT id FROM users WHERE UserName=? ");
    $stmt->bindValue(1, $userName, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0]['id'] ;
}
