<!-DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='../css/bootstrap.css' />
</head>
<body>
<?php
DEFINE ('host','localhost');
DEFINE ('user','root');
DEFINE ('pass','root');
mysql_connect(host,user,pass);
ini_set("display_errors",1);
error_reporting(E_ALL ^ E_DEPRECATED);
?>
</body>
</html>
