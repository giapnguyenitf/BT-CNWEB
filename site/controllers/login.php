<!DOCTYPE html>
<?php
session_start();
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php
    require_once("../models/query.php");
      if(isset($_POST['bt_submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = strip_tags($username);
        $username = addslashes($username);
		    $password = strip_tags($password);
		    $password = addslashes($password);
        $en_pass = md5($password);

        if(check_account($username,$en_pass)){
          $_SESSION['username'] = $username;
          header('Location:../../admin/views/index.php');
        }else {
          header('Location:../views/login.php');
        }

      }


     ?>
  </body>
</html>
