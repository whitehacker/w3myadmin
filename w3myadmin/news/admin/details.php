<html>
<head>
  <link rel='stylesheet' href='css/bootstrap.css' />
  <link rel='stylesheet' href='css/font-awesome.min.css' />
</head>
<body>
<?php
DEFINE ('host','localhost');
DEFINE ('user','root');
DEFINE ('pass','');
mysql_connect(host,user,pass);
ini_set("display_errors",1);
error_reporting(E_ALL ^ E_DEPRECATED);

mysql_select_db("isd");
$id=$_GET['id'];
$select=mysql_query("SELECT * FROM news WHERE id=$id");
$row=mysql_fetch_array($select);

$selectall=mysql_query("SELECT * FROM news order by pub_date desc");
?>
<div class="container">
  <div class="col-md-8">
    
  
<h3><a href="details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
<span class="text-muted">Published By:<?php echo $row['author']; ?></span>

<span class="text-muted">Published Date:<?php echo $row['pub_date']; ?></span>
<span class="text-muted">Category:<a href="category.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a></span>

<p>
  <?php echo $row['text']; ?>
  
</p>
</div>

<div class="col-md-4">
  <h3>Recent News</h3>
  <?php
  while($row_all=mysql_fetch_array($selectall)){
    $txt=$row_all['text'];
    $txt=substr($txt,0,100);
    $txt.="...";
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