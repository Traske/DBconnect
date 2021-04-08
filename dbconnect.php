<?php


$host = "localhost";
$user = "dhg19";
$pass = "phpmysql";
$db = "dhg19";

try {
  $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
}
catch(PDOException $e) {
  echo "Databaskontakten misslyckades: " . $e->getMessage();
}
?>