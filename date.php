<?php
include 'config.php';
date_default_timezone_set("Asia/Karachi");
$dt1=date("Y-m-d");
$dt2=date("H:i:s");
$query_auto = "INSERT INTO orders (time,date) VALUE ('$dt2','$dt1')";
mysql_query($query_auto) or die(mysql_error());
?> 