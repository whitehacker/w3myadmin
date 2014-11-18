<?php
session_start();
include("../conf/config.inc");
?>
<!-Doctype -->
<html>
  <head>
    <title>Registration Page</title>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <?php
            if( isset($_SESSION['ERR_MSG']) && is_array($_SESSION['ERR_MSG']) && count($_SESSION['ERR_MSG']) >0 ) {
              echo '<div class="err">';
              foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                echo '<small>',$msg,'</small>';
              }
              echo '</div>';
              unset($_SESSION['ERR_MSG']);
            }
          ?>
    <form class="form-horizontal" action="../controller/register.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Authors Registration Page</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>
  <div class="col-md-4">
  <input id="textinput" name="fname" type="text" class="form-control input-md">
  <span class="help-block">Please Enter your First Name</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>
  <div class="col-md-4">
  <input name="lname" type="text"  class="form-control input-md">
  <span class="help-block">Your Last Name Please!</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email Address</label>
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" class="form-control input-md">
  <span class="help-block">Valid Email!</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">User Name</label>
  <div class="col-md-4">
  <input id="textinput" name="uname" type="text"  class="form-control input-md">
  <span class="help-block">The Username/s are Unique</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="pass1" type="password" class="form-control input-md">
    <span class="help-block">Your Password!</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Retype Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="pass2" type="password" class="form-control input-md">
    <span class="help-block">RE-Enter your Password!</span>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="subbtn" class="btn btn-primary">Register!</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>
  </body>
</html>