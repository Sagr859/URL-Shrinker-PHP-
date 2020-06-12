<?php
$host="localhost";
$user="id14058335_admin";
$password="-L}7/K6#>X{+hqN$";
$db="id14058335_shrinker";

$conn=new mysqli($host,$user,$password,$db);
if($conn->connect_error){
  echo "Failed ".$conn->connect_error;

}
?>