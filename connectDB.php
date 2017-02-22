<?php

$db_connect = mysqli_connect("localhost", "luckylis_web4", "12345678", "luckylis_web4");

if (!$db_connect) {
    echo "connect error";
    exit;
}
mysqli_query($db_connect,"SET NAMES UTF8");

?>