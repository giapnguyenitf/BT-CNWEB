<?php
  require_once("../models/query.php");
  $idthda=$_GET['idthda'];
  $mssv=$_GET['mssv'];
  $result=get_info_sv_thda($mssv);
  $arr_sv=mysqli_fetch_array($result);

 ?>
