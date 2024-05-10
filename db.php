<?php
$host = "lt80glfe2gj8p5n2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "z7zk7ye6mh6z6z66";
$password = "scxrpluon9bsrpjg";
$database = "iyawhqajpf7r872p";
$port = 3306;

$conn = new mysqli($host, $username, $password, $database, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
