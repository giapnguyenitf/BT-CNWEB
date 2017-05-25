<?php
require_once("../models/query.php");
if(isset($_POST['bt_submit'])){
  $tendetai = $_POST['tendetai'];
  $iddoan = $_POST['iddoan'];
  echo $iddoan;
  echo $tendetai;
  $result = add_detai($tendetai,$iddoan);
  if($result){
      header("Location: ../views/dsdetai.php");
  }else {
    echo "error";
  }

}else {
  echo "ERROR!";
}
 ?>
