<?php
require_once("../models/query.php");
if(isset($_POST['bt_edit'])){
  $iddetai = $_POST['iddetai'];
  $result = get_info_detai($iddetai);
  $arr = mysqli_fetch_array($result);
  echo $arr['iddetai'];


}elseif (isset($_POST['bt_delete'])) {
  $iddetai = $_POST['iddetai'];
  // $result = delete_detai($iddetai);
  $result =true;
  if($result){
    $show_modal = true;
  }

}
 ?>
