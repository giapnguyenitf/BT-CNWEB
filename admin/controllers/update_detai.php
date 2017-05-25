<?php

require_once("../models/query.php");
if(isset($_POST['bt_submit'])){
  $iddetai = $_POST['iddetai'];
  $tendetai = $_POST['tendetai'];
  echo $iddetai;
  echo $tendetai;
  $result = update_detai($iddetai,$tendetai);
  if($result){
    header("Location:../views/dsdetai.php");
  }else {
  }
}

 ?>
