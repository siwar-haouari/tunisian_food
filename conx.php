<?php
$db_server = "127.0.0.1";
 $db_username = "root";
 $db_pwd = "";
 $db_name = "app_web";
 $conx = new PDO("mysql: host=$db_server;dbname=$db_name",$db_username,$db_pwd);
 ?>