<?php
session_start();
?>
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
    $selectall=mysql_query("SELECT * FROM news order by pub_date desc");
    ?>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <?php
            if(isset($_SESSION['success_update'])){
              echo "<h3 class='alert alert-success'>" . $_SESSION['success_update'] . "</h3>";
              //unset($_SESSION['success_update']);
              session_destroy();
            }
            else if(isset($_SESSION['fail_update'])){
              echo "<h3 class='alert alert-danger'>" . $_SESSION['fail_update'] . "</h3>";
              //unset($_SESSION['fail_update']);
              session_destroy();
            }
            ?>
            <table class="table">
              <tr>
            <th>S/N</th><th>Title</th><th>Author</th><th>Published Date</th><th colspan=4>Actions</th></tr>
            <?php
            $i=1;
            while($row=mysql_fetch_array($selectall)){
              ?>
                <tr>
                <td><?php echo $i; ?></td><td><?php echo $row['title']; ?></td><td><?php echo $row['author']; ?></td>
                <td><?php echo $row['pub_date']; ?></td>
                <td>
                  <a href="details.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i></a>
                </td>
                <td>
                  <a href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                  <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you really want to Delete this Record?')"><i class="fa fa-trash"></i></a>
                </td>
                <td>
                  <a href="publish.php?id=<?php echo $row['id']; ?>"><i class="fa fa-external-link"></i></a>
                </td>
              </tr>
            <?php
            $i++;
            }
            ?>
          </table>
          </div>
          <div class="col-md-4">
            <h3>Recent News</h3>
          </div>
        </div>
    </div>
  </body>
</html>