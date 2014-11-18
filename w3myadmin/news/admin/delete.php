<?php
session_start();
include("conf/config.inc");
mysql_select_db("isd");

$id=$_GET['id'];
$delete=mysql_query("DELETE FROM news WHERE id='$id'");
if($delete){
  //header("location: ../index.php");
  echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
  $_SESSION['success_update']="News has been Removed!";
}
else{
  //header("location: ../index.php");
  echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
  $_SESSION['fail_update']="Unable to Remove News!" . mysql_error();  
}
mysql_close();
?>