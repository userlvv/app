<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "mydatabase";
$charset = "utf8mb4";

try {
  $connect = new PDO("mysql:host=$servername;dbname=$dbname;charset=$charset", $username, $password);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>