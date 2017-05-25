<?php
require_once("../models/query.php");
$result = get_tendetai();
$arr_dt = array();
while ($row = mysqli_fetch_assoc($result)){
            $arr_dt[] = $row;
        }
 ?>
