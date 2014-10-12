<?php
$link=mysql_connect("localhost","root","root");
$db=$_GET['db'];
$query=mysql_query("DROP DATABASE $db");
if($query){
  echo $db . " " . "has been removed!";
}
else{
  echo "Unable to Drop Database" . mysql_error();
}


?>
