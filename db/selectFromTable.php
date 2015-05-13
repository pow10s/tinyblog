<?php
function selectFromTable($row1, $row2, $loginUserName, $loginPassword)
{
    $db = new PDO("mysql:dbname=users;host=localhost", "root", "");
    $stmt = $db->query('SELECT * FROM users');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if ($row[$row1] == $loginUserName && $row[$row2] == $loginPassword) {
          echo 'Welcome, '.$loginUserName;
        }
        else {
        }
    }
    return true;
}
