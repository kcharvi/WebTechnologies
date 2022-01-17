<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"19bce7002lab8");
session_start();
?>