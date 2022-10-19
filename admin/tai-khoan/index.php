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
}elseif(isset($_GET['edit'])){
    $get_id = $_GET['id'] ?? "";
    $row = users_select_by_id($get_id);
    $VIEW_NAME = 'edit.php';
} elseif (isset($_GET['update'])) {
    $get_id = $_GET['id'] ?? "";
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $phone = $_POST['phone'];
    $role_id = $_POST['role_id'];
    users_update($get_id, $name, $email , $hash_password , $phone , $role_id);
    header("location: " . ADMIN_URL . '/tai-khoan/index.php');
      die;
    }
    $row = users_select_by_id($get_id);
    $VIEW_NAME = 'edit.php';
}elseif (isset($_GET['delete'])) {
    $get_id = $_GET['id'] ?? "";
    users_delete($get_id);
    header("location: " . ADMIN_URL . 'tai-khoan/index.php');
    die;
}else{
    
    $users = get_all_users();
    $VIEW_NAME = "list.php";
}

include_once '../layout.php';
?>