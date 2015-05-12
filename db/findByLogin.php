<?php
function findByLogin($login)
{
    $db = PDO('mysql:host=localhost;dbname=users', 'root', '');
    //Це самий тупий метод в моєму житті
    //Ти чомусь вигріб усіх користувачів(хоча тобі треба було 1го з логіном). Можна ж через sql "select * from users where login=$login"
    $stmt = $db->query('SELECT * from users');


    $stmt->setFetchMode(PDO::FETCH_ASSOC);
     //Далі по циклу ти їх проходиш
    while ($row = $stmt->fetch()) {
        echo $login;

}
}