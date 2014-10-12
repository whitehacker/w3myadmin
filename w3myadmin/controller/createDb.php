<?php
  $link=mysql_connect("localhost","root","root");
  //$db=$_POST['dbname'];
  //$query=mysql_query("CREATE DATABASE $db",$link);
  //if($query){
    //echo $db . " " . "has been created!";
    $showDb=mysql_query("SHOW DATABASES");
    $i=0;
    echo "<table border=1>";
    echo "<tr><td>S/N</th><th>Database Name</th><th colspan=2>Action</th></tr>";
    while($row=mysql_fetch_array($showDb)){
      if($i!=0 && $row['Database']!='mysql' && $row['Database']!='performance_schema'){
        echo "<tr>";
      echo "<td>" . $i . "</td><td>" . $row['Database'] . "</td>";
      echo "<td><a href='showTables.php?db=$row[0]'>Show Tables</a></td>";
      ?>
      <td><a href='dropDb.php?db=<?php echo $row[0]; ?>' onclick="return confirm('Do you really wants to Drop this Database?')">Drop Database</a></td>
      <?php
      echo "</tr>";
    }
    $i++;
  }

  echo "</table>";
  //}
  /*else{
    echo "Unable to create Database!" . mysql_error();
  }*/

?>
