<?php
$host = getenv("IP");
$port = 3306;
$dbname = flower_shop;
$username = getenv("C9_USER");
$password = "";
$dbConn = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $username, $password);
?>