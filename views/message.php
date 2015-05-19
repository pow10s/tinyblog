<html>
<form method="POST">
    <p>Title:</p>
    <input type="text" name="titleName">
    <p>Message:</p>
    <p><textarea name="message"></textarea></p>
    <?php
    echo "<select name=\"users_list\">";
    echo "<option size =30 ></option>";
    include_once ('dropDownList.php');
    dropDownList();
    echo "</select>";
    ?>
    <p><input type ="submit" name="send_btn" value="Send"></p>
    </form>
</html>
