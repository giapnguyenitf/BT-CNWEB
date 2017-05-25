
<?php
require_once("../models/query.php");
  $mssv = $_GET['mssv'];
  $result = get_info_sv($mssv);
  $arr = mysqli_fetch_array($result);
 ?>
