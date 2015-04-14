<?php
mysql_connect("localhost")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");

mysql_select_db("users")
or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
