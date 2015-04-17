<?php
function findByLogin($login)
{
    $db = PDO('mysql:host=localhost;dbname=users', 'root', '');
    $stmt = $db->query('SELECT * from users');
//Установка fetch mode
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $stmt->fetch()) {
        echo $login;

}
}