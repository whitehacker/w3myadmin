<?php
include('conf/config.inc');
$db=$_GET['db'];
$tab=$_GET['tab'];
echo "You are in:" . "<b>" . $db . "</b> Database and " . $tab . " Table!";

mysql_select_db($db);
$desc=mysql_query("DESCRIBE $tab");

if($desc){
  $i=1;
  echo "<table class='table table-bordered'>";
  echo "<tr><th>S/N</th><th>Field</th><th>Data Type</th><th>Nullability</th><th>Key</th><th>Extra</th></tr>";
  while($des=mysql_fetch_assoc($desc)){
    echo "<tr>";
      echo "<td>" . $i . "</td><td>" . $des['Field'] ."</td><td>" . $des['Type'] . "</td><td>". $des['Null'] . "</td><td>" .$des['Key'] . "</td><td>". $des['Extra'] . "</td>";

    echo "</tr>";
    $i++;

  }
  echo "</table>";
}
else{
  echo "Error Occured" . mysql_error($desc);

}


?>
