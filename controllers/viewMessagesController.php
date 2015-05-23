<?php
include_once ('db/getUserIdByUserName.php');
include_once ('libs/viewMessages.php');
$result = viewMessage(getUserIdByUserName($_COOKIE['user']));
foreach($result as $key =>$value){
    echo "<table border = 1>". "<tr>"."<th>"."Title"."</th>"."<th>"."Message"."</th>"."</tr>"."</table>";
    echo "<table border = 1>". "<tr>"."<th>".$value['Title']."</th>"."<th>".$value['Text']."</th>"."</tr>"."</table>";
}
