<?php
include 'connect.php';
$slug=$_POST['slugurl'];
$res=$conn->query("SELECT `l_url` FROM `shrink` WHERE `slug`='$slug'");
echo $res;
?>