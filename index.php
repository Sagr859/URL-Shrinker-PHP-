<?php
  include 'connect.php';
  if(!isset($_GET['goto'])){
    echo "<script>window.location.replace('login.php');</script>";
  }
  $slug = $_GET['goto'];
  $sql = "SELECT * FROM `short_urls` WHERE `slug`='$slug'";
  $rs=$conn->query($sql);
  $num = $rs->num_rows;
	if($num > 0){
      $rws = $rs->fetch_assoc();
      $id = $rws['id'];
        $res=$conn->query("INSERT INTO `visitors`(`url_id`, `date_visited`) VALUES ($id, CURRENT_TIMESTAMP(6))");
        if($res){
          echo "<script>window.location.replace('".$rws['l_url']."');</script>";
        }
        else{
          echo "err";
        }
       
  }
  else{
    http_response_code(404);
  }
?>