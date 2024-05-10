<?php
  $conn = new mysqli("mysql://z7zk7ye6mh6z6z66:scxrpluon9bsrpjg@lt80glfe2gj8p5n2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/iyawhqajpf7r872p");
  if($conn -> connect_error) {
      die("Connection failed: " . $conn -> connect_error);
   }
?>
