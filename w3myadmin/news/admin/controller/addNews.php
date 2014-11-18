<?php
include("../conf/config.inc");
mysql_select_db("isd");

$title=$_POST['title'];
$txt=$_POST['txt'];
$author=$_POST['author'];
$cat=$_POST['cat'];

$insert=mysql_query("INSERT INTO news(id,title,text,author,category) VALUES(null,'$title','$txt','$author','$cat')");
if($insert){
  echo "<span class='alert alert-success'>News has been Published!</span>";
  
}

else{
  echo "<span class='alert alert-error'>Error Occured, Unable to Publish News</span>" . mysql_error();
  
}
mysql_close();
?>