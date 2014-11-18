<html>
<head>
  
</head>
<body>
<?php
DEFINE ('host','localhost');
DEFINE ('user','root');
DEFINE ('pass','');
mysql_connect(host,user,pass);
ini_set("display_errors",1);
error_reporting(E_ALL ^ E_DEPRECATED);
echo "<link rel='stylesheet' href='../css/bootstrap.css' />";
mysql_select_db("isd");
$cat=$_GET['cat'];
$select=mysql_query("SELECT * FROM news WHERE category='$cat'");


$selectall=mysql_query("SELECT * FROM news order by pub_date desc");
?>
<div class="container">
  <div class="col-md-8">
    <a href="index.php" class="btn btn-danger">Back to Home</a>
  <br/>
    <h3>News in <?php echo $cat; ?> Category.</h3>
    <?php
      while($row=mysql_fetch_array($select)){
        
        
      
      ?>
      <a href="details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a><br/>
      <?php
      }
    
    
    ?>



</div>

<div class="col-md-4">
  <h3>Recent News</h3>
  <?php
  while($row_all=mysql_fetch_array($selectall)){
  
    ?>
    
    <a href="details.php?id=<?php echo $row_all['id']; ?>"><?php echo $row_all['title']; ?></a>
    <br/>
    
    
  
  
  <?php
  }
  
  ?>
</div>
</div>
</body>

</html>