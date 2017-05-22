<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
 header('Location: login.php');
}
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
ahihi
  </body>
</html>
