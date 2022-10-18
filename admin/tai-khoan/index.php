<?php 
require_once '../../global.php';
require_once '../../dao/users_dao.php';
require_once '../../dao/role_dao.php';
if(isset($_GET['tao-moi'])){
    
    $roles = role_all();
    $VIEW_NAME = "form-tao-moi.php";
}elseif(isset($_GET['luu-tao-moi'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $phone = $_POST['phone'];
    $role_id = $_POST['role_id'];
    create_user($name, $email, $hash_password, $phone, $role_id);
    header('location: ' . ADMIN_URL . 'tai-khoan/index.php');
    die;
}
else{
    
    $users = get_all_users();
    $VIEW_NAME = "list.php";
}

include_once '../layout.php';
?>