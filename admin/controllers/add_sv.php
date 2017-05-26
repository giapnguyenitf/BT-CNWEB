<?php
require_once("../models/query.php");
if(isset($_POST['bt_submit'])){
  $mssv = $_POST['mssv'];
  $hoten = $_POST['hoten'];
  $gt = $_POST['gioitinh'];
  $ngaysinh = $_POST['ngaysinh'];
  $email = $_POST['email'];
  $sdt = $_POST['sdt'];
  $lop = $_POST['lop'];
  if($gt=="true"){
    $gioitinh=true;
  }else {
    $gioitinh =false;
  }

  $result = add_sv($mssv,$hoten,$gioitinh,$ngaysinh,$email,$sdt,$lop);
  if($result){
      header("Location: ../views/dssinhvien.php");
  }else {
    echo "error";
  }

}else {
  echo "ERROR!";
}

 ?>
