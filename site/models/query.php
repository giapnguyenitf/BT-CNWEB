<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
require_once("connection.php");
require("../controllers/account.php");

function check_account($username,$password){
  global $conn;
  $sql = "select * from account where username = '$username' and password = '$password' ";
    			$query = mysqli_query($conn,$sql);
    			$num_rows = mysqli_num_rows($query);
  mysqli_close($conn);
  return $num_rows;
}

function add_account($username,$password,$dicen){
  global $conn;
  $sql = "INSERT INTO account(
	    					username,
	    					password,
                decentralization
	    					) VALUES (
	    					'$username',
	    					'$password',
                $dicen
	    					)";
  $result = mysqli_query($conn,$sql);
  return $result;
}
 ?>
  </body>
</html>
