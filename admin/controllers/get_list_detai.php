<?php
require_once("../models/query.php");
$result = get_list_detai();
$arr = array();
while ($row = mysqli_fetch_assoc($result)){
            $arr[] = $row;
        }

 ?>
