<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
session_start();
$_SESSION["from"]="weChat";
$_SESSION["roomId"]=$_COOKIE["roomId"];
$_SESSION["buildingId"]=$_COOKIE["buildingId"];
header("location:index.php");
?>