<?php
session_start();
include("../conf/config.inc");
mysql_select_db("isd");
$err=array();
$errflag=false;
function clean($str){
  $str=trim($str);
  if(get_magic_quotes_gpc()) {
    $str = stripslashes($str);
  }
  return mysql_real_escape_string($str);
}
$fname=clean($_POST['fname']);
$lname=clean($_POST['lname']);
$uname=clean($_POST['uname']);
$email=clean($_POST['email']);
$pass1=clean($_POST['pass1']);
$pass2=clean($_POST['pass2']);
echo $fname;
if($fname == ''){
  $err[]='First Name is Required!';
  $errflag=true;
}
if($lname == ''){
  $err[]='Last Name is Required!';
  $errflag=true;
}
if($uname == ''){
  $err[]='You must Enter a Username!';
  $errflag=true;
}
if($email == ''){
  $err[]='We also need you Email Address!';
  $errflag=true;
}
if($pass1 == ''){
  $err[]='Password is missing!';
  $errflag=true;
}

if($pass2 == ''){
  $err[]='Retype your Password';
  $errflag=true;
}
if((strcmp($pass1,$pass2) !=0)){
  $err[]='Passwords do not match!';
  $errflag=true;
}
$checkuser=mysql_query("SELECT uname from members where uname='$uname'");
if(mysql_num_rows($checkuser)==1){
  $err[]='Username Already Exist!';
  $errflag=true;
}
  if($errflag){
    $_SESSION['ERR_MSG']=$err;
    header("location: ../views/register.php");
  }
echo $errflag . "<br/>";
  foreach($err as $val){
    echo $val;
  }
?>
