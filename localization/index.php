<?php
mysql_connect("localhost","root","");
mysql_select_db("isd");
mysql_query("SET names utf8");
mysql_query("SET character-set utf8");
if(isset($_GET['lang'])){
  
    if($_GET['lang']==ps){
      include("language/ps.php");
      $select=mysql_query("SELECT * FROM comments WHERE lang='ps'");
    }
    else if($_GET['lang']==da){
      include("language/da.php");
      $select=mysql_query("SELECT * FROM comments WHERE lang='da'");
    }
    else{
      include("language/en.php");
      $select=mysql_query("SELECT * FROM comments WHERE lang='en'");
    }
}
else{

  include("language/en.php");
  $select=mysql_query("SELECT * FROM comments WHERE lang='en'");
}

?>
<!-Doctype html>
<html dir="<?php echo $dir; ?>">
<head>
  <meta charset="UTF-8">
  <?php
  if(isset($_GET['lang'])){
    echo "<link rel='stylesheet' href='style/rtl.css' />";  
  }
  
  else{
    echo "<link rel='stylesheet' href='style/ltr.css' />";
  }

  ?>
  

</head>

<body>
  <div dir="<?php echo $pos; ?>">
  
  <a href="index.php?lang=<?php echo $lk1; ?>"><?php echo $lang1; ?></a> | <a href="index.php?lang=<?php echo $lk2; ?>"><?php echo $lang2; ?></a>
  </div>
  <h2><?php echo $head; ?></h2>
  <p><?php echo $par; ?></p>
  <input type="submit" value="<?php echo $keepreading; ?>">
  <?php
  while($row=mysql_fetch_array($select)){
    echo $row['body'] . " " . $row['date'] . "<br/>";
  }
  
  ?>
  
</body>

</html>