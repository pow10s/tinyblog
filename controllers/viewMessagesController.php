<?php
include_once ('db/getUserIdByUserName.php');
include_once ('libs/viewMessages.php');
print_r (viewMessage(getUserIdByUserName($_COOKIE['user'])));