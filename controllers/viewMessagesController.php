<?php
include_once ('db/getUserIdByUserName.php');
include_once ('libs/viewMessages.php');
$result = viewMessage(getUserIdByUserName($_COOKIE['user']));
foreach($result as $key =>$value){
    echo "<table border = 1>". "<tr>"."<th>"."Title"."</th>"."<td>".$value['Title']."</td>"."</tr>"."<tr>"."<th>"."Message"."</th>"."<td>".$value['Text']."</td>"."</tr>"."</table>";
}
