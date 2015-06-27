<?php
function selectFromTable($loginUserName, $loginPassword)
{
    $db= DBconnection::getConnection();
    $stmt = $db->prepare("SELECT * FROM users WHERE UserName=? AND Password=?");
    $stmt->bindValue(1, $loginUserName, PDO::PARAM_STR);
    $stmt->bindValue(2, $loginPassword, PDO::PARAM_STR);
    $stmt->execute();
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($result)) {
    return true;
}
else return false;
}