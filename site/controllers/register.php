<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require("../models/query.php");

    if(isset($_POST['bt_submit'])){

      $username = $_POST['username'];
      $password = $_POST['password'];
      $en_pass=md5($password);
      if(add_account($username,$en_pass)){
        header("Location:../views/login.php");
      }else{
        header("Location:../views/register.php");
      }
    }

     ?>
  </body>
</html>
