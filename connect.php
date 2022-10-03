<?php
$servername = "202.92.5.49";
$username = "wrqphlwwhosting_nhom7";
$password = "duycon2003";
$dbname = "wrqphlwwhosting_nhom7";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8;", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Kết nối thành công";
  
} catch (PDOException $e) {
  echo "Lỗi kết nối: " . $e->getMessage();
}
?>