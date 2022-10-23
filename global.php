<?php

const BASE_URL = "http://localhost:/nhom7-du-an-mau/";
const SITE_URL = BASE_URL . "site/index.php";
const CONTENT_URL = BASE_URL . "content/";
const ADMIN_URL = BASE_URL ."admin/";

// function pdo_get_connection(){
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=du_an_mau", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   // echo "kết nối thành công!"."<br>";
//   return $conn; // trả về truy vấn để viết tiếp các hàm 
// } catch(PDOException $e) {
//   echo "lỗi kết nối: " . $e->getMessage();
// }
// }// sql
//sql,...,id
//"insert into loai(ten_loai) values(?)","Laptop" (câu lệnh để thêm mới)
//"update loai set ten_loai=? where ma_loai=?", "Laptop", "1"; (câu lệnh cập nhật)
// "delete from loai where ma_loai=?", "1" 

// function pdo_execute($sql){ //hàm này  thao tác cơ sở dữ liệu lên phải có tham số $sql ở trong (muốn thêm sử xóa dùng hàm này)
//   $sql_args = array_slice(func_get_args(), 1); //sql_args là tham số truyền vào func_get_args tách mổ ra từ vị trí số 1
//  try{
//  $conn = pdo_get_connection();
//  $stmt = $conn->prepare($sql);
//  $stmt->execute($sql_args);
//  }
//  catch(PDOException $e){ // thông báo lỗi
//  throw $e;
//  }
// }

// // truy vẫn nhiều dữ liệu
// function pdo_query($sql){
//   $sql_args = array_slice(func_get_args(), 1);
//   try{
//   $conn = pdo_get_connection();
//   $stmt = $conn->prepare($sql);
//   $stmt->execute($sql_args);
//   $rows = $stmt->fetchAll();
//   return $rows;
//   }
//   catch(PDOException $e){
//   throw $e;
//   }
// }

// // truy vẫn 1 dữ liệu
// function pdo_query_one($sql){
//   $sql_args = array_slice(func_get_args(), 1);
//   try{
//   $conn = pdo_get_connection();
//   $stmt = $conn->prepare($sql);
//   $stmt->execute($sql_args);
//   $row = $stmt->fetch(PDO::FETCH_ASSOC);
//   return $row;
//   }
//   catch(PDOException $e){
//   throw $e;
//   }
//   // finally{ // đóng php.
//   // unset($conn);
//   // }
//  }

function check_admin_role(){
  if(isset($_SESSION['auth']) && $_SESSION['auth']['role_id'] == 2){
      return true;
  }

  return false;
}
?>
