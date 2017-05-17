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
      require_once("../../system/library/connection.php");

      if(isset($_POST['bt_submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = strip_tags($username);
        $username = addslashes($username);
		    $password = strip_tags($password);
		    $password = addslashes($password);

      
      }


     ?>
     <script type="text/javascript">

     </script>
  </body>
</html>
