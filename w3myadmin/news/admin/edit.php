<?php
include("conf/config.inc");
mysql_select_db("isd");
$id=$_GET['id'];
$select=mysql_query("SELECT * FROM news WHERE id=$id");
$row=mysql_fetch_array($select);
?>
<!-Doctype -->

<html>
<head>
  <link rel='stylesheet' href='css/bootstrap.css' />
  <link rel='stylesheet' href='css/font-awesome.min.css' />
</head>
  <body>
    <div class="container">
    <form class="form-horizontal" action="controller/editNews.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Update News</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">News Title</label>
  <div class="col-md-4">
  <input id="textinput" name="title" type="text" class="form-control input-md" value="<?php echo $row['title']; ?>">
  <span class="help-block">Please Enter the News Title</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Author</label>
  <div class="col-md-4">
  <input name="author" type="text"  class="form-control input-md" value="<?php echo $row['author']; ?>">
  <span class="help-block">Who is the Author?</span>
  </div>
</div>





<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Category</label>
  <div class="col-md-4">
    <select name="cat" class="form-control input-md">
      <option value="political">Political</option>
      <option value="social">Social</option>
      <option value="science">Science</option>
      <option value="sports">Sports</option>
    </select>
    <span class="help-block">The News Category</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">News Body</label>
  <div class="col-md-4">
  <textarea cols=120 rows=10 name="txt" class="form-control input-md"><?php echo $row['text']; ?></textarea>
    <span class="help-block">Enter the Text</span>
  </div>
</div>

<input name="id" type="hidden" value="<?php echo $row['id']; ?>">
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="subbtn" class="btn btn-warning">Update News!</button>
  </div>
</div>

</fieldset>
</form>
    </div>
  </body>


</html>