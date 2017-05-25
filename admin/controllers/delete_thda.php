<?php
require_once("../models/query.php");
$idthda = $_GET['idthda'];
$result = delete_thda($idthda);
if($result){
  header("Location: ../views/dsthda.php");
}else{
  echo "error!";
}


 ?>
