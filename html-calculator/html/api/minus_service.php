<?php 
    $x = $_REQUEST["x"];
    $y = $_REQUEST["y"];
    $result = $x - $y;
    //echo $result;
    $data = [$x, $y, $result];
    echo json_encode($data);
