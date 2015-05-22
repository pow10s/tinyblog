<?php
include_once ('db/getUserIdByUserName.php');
include_once ('libs/viewMessages.php');
viewMessage(getUserIdByUserName($_COOKIE['user']));