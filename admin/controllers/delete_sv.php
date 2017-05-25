<?php
require_once("../models/query.php");
$mssv = $_GET['mssv'];
$result = delete_sv($mssv);
if($result){
  header("Location: ../views/dssinhvien.php");
}else{
  header("Location:../view/dssinhvien.php");
}

 ?>
