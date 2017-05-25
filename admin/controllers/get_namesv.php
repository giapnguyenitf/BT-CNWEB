<?php
require_once("../models/query.php");
$result = get_namesv();
$arr = array();
while ($row = mysqli_fetch_assoc($result)){
            $arr[] = $row;
        }
 ?>
