<?php
function dropDownList(){
    $db = new PDO("mysql:dbname=users;host=localhost", "root", "");
    $stmt = $db->prepare("SELECT UserName,id FROM users");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $key => $value) {
        echo "<option value='".$value['id']."'>".$value['UserName']."</option>";

    }


}