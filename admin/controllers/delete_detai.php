<?php
require_once("../models/query.php");
$iddetai = $_GET['iddetai'];
$result = delete_detai($iddetai);
if($result){
  header("Location: ../views/dsdetai.php");
}else{
  return confirm ('Cannot delete this detai!');
}


 ?>
