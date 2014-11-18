<?php
session_start();
include("conf/config.inc");
mysql_select_db("isd");

$id=$_GET['id'];
$delete=mysql_query("UPDATE news SET is_published=1 WHERE id='$id'");
if($delete){
  //header("location: ../index.php");
  echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
  $_SESSION['success_update']="News has been Published!";
}
else{
  //header("location: ../index.php");
  echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
  $_SESSION['fail_update']="Unable to Publish News!" . mysql_error();  
}
mysql_close();
?>