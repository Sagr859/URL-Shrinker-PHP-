<?php
include 'connect.php';
$id = $_GET['id'];
$url    = $_POST['originalurl'];
$slug = uniqid();
$sql    = "INSERT INTO `short_urls` (`userId`, `l_url`, `date_created`, `slug` ) values ($id, '$url', CURRENT_TIMESTAMP(6), '$slug')";
$res    = $conn->query($sql);
echo "Your Short URL: ".$_SERVER['SERVER_NAME']."/?goto=".$slug;

?>
