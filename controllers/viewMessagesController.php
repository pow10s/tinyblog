<?php
include_once ('db/getUserIdByUserName.php');
include_once ('libs/viewMessages.php');
$result = viewMessage(getUserIdByUserName($_COOKIE['user']));
echo "<table border = 1>". "<tr>"."<th>"."Title"."</th>"."</tr>"."<tr>"."<th>"."Message"."</th>"."</tr>";
foreach($result as $key =>$value){
    echo "<tr>"."<td>".$value['Title']."</td>"."</tr>"."<tr>"."<td>".$value['Text']."</td>"."</tr>";
}
echo "</table>";