<HTML>
<form method="POST">
    <p>Input nickname: </p>
    <input type="text" name="nickName">
    <p>Write message: </p>
    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <input type=submit [name=input] value=Submit>
</form>
</HTML>
<?php
ini_set('display_errors','Off');
if (empty($_POST['input'])) {
    if (($_POST['nickName']=='') && isset($_POST['text'])) {
        echo 'Please input NICKNAME';
    }
    elseif (isset($_POST['nickName']) && isset($_POST['text'])) {
        echo $_POST['nickName'] . ': ' . $_POST['text'] ;

    }
}
else {
    echo 'Input data';
}
