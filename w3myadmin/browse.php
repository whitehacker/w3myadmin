<!-Doctype html>
<?php
include('conf/config.inc');
$db=$_GET['db'];
$tab=$_GET['tab'];
mysql_select_db($db);
$sql=mysql_query("SELECT * FROM $tab");
$num_fields=mysql_num_fields($sql);
$f=array();
echo "<table class='table table-bordered'>";
echo "<tr>";
for($i=0;$i<$num_fields;$i++){
  echo "<td>" . mysql_field_name($sql,$i) . "</td>";
  $f[]=mysql_field_name($sql,$i);
}
echo "</tr>";

while($row=mysql_fetch_array($sql)){
    echo "<tr>";
      foreach($f as $fn){
        echo "<td>" . $row[$fn] . "</td>";
      }

    echo "</tr>";

}

echo "</table>";
?>
