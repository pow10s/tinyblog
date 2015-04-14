<html>
<form  method="POST">

    <p>E-mail: </p>
    <input type="text" name="e-mail">
    <p>UserName: </p>
    <input type="text" name="username">
    <p>Password: </p>
    <input type="password" name="pass">
   <p><input type="submit" name="submit_btn" value="Submit "></p>

</form>
</html>
<?php
include "db/scripts/connect.php";
$email = $_REQUEST['e-mail'];
$user = $_REQUEST['username'];
$password = $_REQUEST['pass'];
$insert_sql = "INSERT INTO users (e-mail, username, pass)" .
    "VALUES('{$email}', '{$user}', '{$password}');";
mysql_query($insert_sql);
    ?>
