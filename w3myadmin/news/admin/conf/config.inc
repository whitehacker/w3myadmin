<?php
DEFINE ('host','localhost');
DEFINE ('user','');
DEFINE ('pass','');
mysql_connect(host,user,pass);
ini_set("display_errors",1);
error_reporting(E_ALL ^ E_DEPRECATED);
echo "<link rel='stylesheet' href='../css/bootstrap.css' />";
?>