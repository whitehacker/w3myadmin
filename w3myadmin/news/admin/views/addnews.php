<?php
include("../conf/config.inc");
?>
<!-Doctype -->

<html>
<head>
  
</head>
  <body>
    <div class="container">
    <form class="form-horizontal" action="../controller/addNews.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Add News</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">News Title</label>
  <div class="col-md-4">
  <input id="textinput" name="title" type="text" class="form-control input-md">
  <span class="help-block">Please Enter the News Title</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Author</label>
  <div class="col-md-4">
  <input name="author" type="text"  class="form-control input-md">
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
  <textarea cols=120 rows=10 name="txt" class="form-control input-md"></textarea>
    <span class="help-block">Enter the Text</span>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="subbtn" class="btn btn-primary">Publish!</button>
  </div>
</div>

</fieldset>
</form>
    </div>
  </body>


</html>