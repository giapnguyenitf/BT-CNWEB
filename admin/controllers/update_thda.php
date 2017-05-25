<?php
require_once("../models/query.php");
if(isset($_POST['bt_submit'])){
  $idthda = $_POST['idthda'];
  $mssv = $_POST['mssv'];
  $iddetai=$_POST['iddetai'];

  $result = update_thda($idthda,$mssv,$iddetai);
  if($result){
    header("Location:../views/dsthda.php");
  }else {
  }
}
 ?>
