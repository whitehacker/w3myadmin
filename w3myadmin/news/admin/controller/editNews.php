<?php
session_start();
include("../conf/config.inc");
mysql_select_db("isd");
$title=$_POST['title'];
$txt=$_POST['txt'];
$author=$_POST['author'];
$cat=$_POST['cat'];
$id=$_POST['id'];
$update=mysql_query("UPDATE news set title='$title', text='$txt',author='$author',category='$cat' WHERE id=$id");
if($update){
  //header("location: ../index.php");
  echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
  $_SESSION['success_update']="News has been Updated!";
}
else{
  //header("location: ../index.php");
  echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
  $_SESSION['fail_update']="Unable to Update News!";  
}
mysql_close();
?>