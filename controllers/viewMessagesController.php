<?php
if (isset($_COOKIE['user'])) {
    include_once('db/getUserIdByUserName.php');
    include_once('libs/viewMessages.php');
    $result = viewMessage(getUserIdByUserName($_COOKIE['user']));
    echo "<table border = 1>" . "<tr>" . "<th>" . "Title" . "</th>" . "<th>" . "Message" . "</th>" . "</tr>";
    foreach ($result as $key => $value) {
        echo "<tr>" . "<td>" . $value['Title'] . "</td>" . "<td>" . $value['Text'] . "</td>" . "</tr>";
    }
    echo "</table>";
}
else {
    include_once('libs/siteutils.php');
    Redirect('http://localhost/projs/tinyblog/index.php?action=login', false);
}