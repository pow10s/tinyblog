<html>
<head>
    <title>Tinyblog</title>
</head>
<body>
<form method="post">
<?php
    echo "<p align='right'>".$_COOKIE['UserName'] . "</p>";
?>
    <p align='right'> <input type = "submit" name = "logout" value = "logout"></p>

</form>
</body>
</html>