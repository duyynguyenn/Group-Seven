<?php
require_once '../global.php';
header("location: " . ADMIN_URL . 'dashboard/index.php');


// test đăng nhập

require_once "./index.php";

session_start();

if(isset($_SESSION["email"]) && $_SESSION["email"] == "Admin@gmail.com"){
    header("location: ./dashboard/index.php");
}else{
    echo "Bạn phải đăng nhập bằng quyền Admin thì mới vào được trang này";
}

?>