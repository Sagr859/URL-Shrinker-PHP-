<?php
include 'connect.php';
$id = $_GET["id"];
$res = $conn->query("SELECT l_url, COUNT(*) AS c FROM visitors, short_urls WHERE short_urls.id=url_id AND short_urls.userId= $id GROUP BY url_id");

$data = array();
foreach ($res as $row) {
  $data[] = $row;
}
print json_encode($data);


?>