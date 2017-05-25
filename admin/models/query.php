<?php
require_once("connection.php");

  function get_list_detai(){
    global $conn;
    $sql = "SELECT detai.iddetai,detai.tendetai,doan.tendoan FROM detai,doan WHERE detai.iddoan = doan.iddoan";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    return $result;
  }

  function get_list_doan(){
    global $conn;
    $sql = "SELECT doan.iddoan,doan.tendoan,doan.hocky,khoa.tenkhoa FROM doan,khoa WHERE doan.idkhoa = khoa.idkhoa ORDER BY doan.hocky";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    return $result;
  }

  function get_list_khoa(){
    global $conn;
    $sql = "SELECT idkhoa,tenkhoa FROM khoa ORDER BY idkhoa";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    return $result;
  }

  function get_list_gv(){
    global $conn;
    $sql = "SELECT giangvien.idgv,giangvien.hoten,giangvien.gioitinh,khoa.tenkhoa FROM giangvien,khoa WHERE giangvien.idkhoa = khoa.idkhoa ORDER BY giangvien.idgv";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    return $result;
  }

  function get_list_sv(){
    global $conn;
    $sql = "SELECT * FROM sinhvien ORDER BY mssv";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    return $result;
  }

  function get_info_sv($mssv){
    global $conn;
    $sql = "SELECT * FROM sinhvien WHERE  sinhvien.mssv = $mssv ";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    return $result;
  }

  function get_info_detai($iddetai){
    global $conn;
    $sql = "SELECT detai.iddetai,detai.tendetai,doan.tendoan FROM detai,doan WHERE  detai.iddetai = $iddetai and detai.iddoan=doan.iddoan";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    return $result;
  }

  function delete_sv($mssv){
    global $conn;
    $sql = "DELETE FROM sinhvien WHERE sinhvien.mssv = $mssv";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;
  }

  function delete_detai($iddetai){

    global $conn;
    $sql = "DELETE FROM detai  WHERE detai.iddetai = $iddetai";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    return $result;
  }
 ?>
