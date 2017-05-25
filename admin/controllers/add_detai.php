<?php
require_once("../models/query.php");
if(isset($_POST['bt_submit'])){
  $tendetai = $_POST['tendetai'];
  $iddoan = $_POST['iddoan'];
  
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
