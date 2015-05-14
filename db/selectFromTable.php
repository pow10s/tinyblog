<?php
function selectFromTable($loginUserName, $loginPassword)
{
    $db = new PDO("mysql:dbname=users;host=localhost", "root", "");
    $stmt = $db->query('SELECT * FROM users');
