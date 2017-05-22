<?php
$server_username= "root";
$server_password= "";
$server_host= "localhost";
$database= "bt-cnweb";
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("Khong the ket noi toi csdl");
mysqli_query($conn,"SET NAMES 'UTF8'");

 ?>
