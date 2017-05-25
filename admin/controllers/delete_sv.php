<?php
require_once("../models/query.php");
$mssv = $_GET['mssv'];
delete_sv($mssv);
header("Location: ../views/dsinhvien.php");

 ?>
