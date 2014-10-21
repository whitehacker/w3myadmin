<?
include('conf/config.inc');
$db=$_GET['db'];
if(isset($db)){

  //mysql_query("Use $db");
  $qry=mysql_query("SHOW TABLES from $db");
  $num=mysql_num_rows($qry);
  echo "We have $num Tables in:" . " " . $db . " " . "Database!" . "<br/>";
  if($qry){
    $i=1;
    echo "<table class='table table-bordered'>";
    echo "<tr><th>S/N</th><th>Table Name</th><th colspan=2>Action</th></tr>";
    while($dbs=mysql_fetch_array($qry)){
      echo "<tr>";
      echo "<td>" . $i . "</td><td>" . $dbs[0] . "</td><td><a href='describe.php?db=$db&tab=$dbs[0]'>Describe</a></td><td><a href='browse.php?db=$db&tab=$dbs[0]'>Show Data</a></td>";
      echo  "</tr>";
      $i++;
    }
    echo "</table>";
  }
  else{
    echo "Error Occured" . mysql_error();
  }
}
else{

  echo "Please Pass a Database Name!";
}
?>
