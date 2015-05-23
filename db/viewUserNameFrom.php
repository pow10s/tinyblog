<?php
function viewUserNameFrom ($userName)
{
    $db = new PDO("mysql:dbname=users;host=localhost", "root", "");
    $stmt = $db->prepare("SELECT UserName FROM users WHERE UserName=? ");
    $stmt->bindValue(1, $userName, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
