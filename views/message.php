<html>
<form method="POST">
    <p>Title:</p>
    <input type="text" name="titleName">
    <p>Message:</p>
    <p><textarea name="message"></textarea></p>
    <?php
    $db = new PDO("mysql:dbname=users;host=localhost", "root", "");
    $stmt = $db->prepare("SELECT UserName,id FROM users");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<select name=\"users_list\">";
    echo "<option size =30 ></option>";
    foreach ($result as $key => $value) {
        echo "<option value='".$value['id']."'>".$value['UserName']."</option>";
    }
    echo "</select>";
    ?>
    <p><input type ="submit" name="send_btn" value="Send"></p>
    </form>
</html>
