<?php
require_once("../models/query.php");
if(isset($_POST['bt_submit'])){
  $idsv = $_POST['idsv'];
  $iddetai = $_POST['iddetai'];
  echo $idsv;
  echo $iddetai;
  $result = add_thda($idsv,$iddetai);
  if($result){
      header("Location: ../views/dsthda.php");
  }else {
    echo "error";
  }

}else {
  echo "ERROR!";
}

 ?>
