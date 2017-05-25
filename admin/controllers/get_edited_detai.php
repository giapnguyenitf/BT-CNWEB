<?php
require_once("../models/query.php");
  $iddetai= $_GET['iddetai'];
  $result = get_info_detai($iddetai);
  $arr = mysqli_fetch_array($result);

 ?>
