<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Tinyblog</title>
</head>
<?php
$view = new \libs\View();
$view->renderPartial('header');

?>
<body>

<?=$content?>

</body>
</html>
