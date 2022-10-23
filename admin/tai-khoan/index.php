<?php

require_once '../../global.php';
require_once '../../dao/users_dao.php';
require_once '../../dao/role_dao.php';
if (isset($_GET['tao-moi'])) {

    $roles = role_all();
    $VIEW_NAME = "form-tao-moi.php";
} elseif (isset($_GET['luu-tao-moi'])) {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $role_id = $_POST['role_id'];
        $avatar = $_FILES['avatar'];
        $err = [];
        if ($name == '') {
            $err['name'] = "Cần có dữ liệu";
        }
        if ($email == '') {
            $err['email'] = "Cần có dữ liệu";
        }
        if ($hash_password == '') {
            $err['hash_password'] = "Cần có dữ liệu";
        }
        if ($phone == '') {
            $err['phone'] = "Cần có dữ liệu";
        }
        if ($avatar['size'] == 0) {
            $err['image'] = "Cần có hình";
        } elseif ($avatar['size'] > 2 * 1024 * 1024) {
            $err['image'] = "Hình đã lớn hơn 2mb";
        } elseif ($avatar['size'] > 0 && $avatar['size'] <= 2 * 1024 * 1024) {

            $ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
            $ext = strtolower($ext);
            if ($ext == 'jpg' || $ext == 'png') {
            } else {
                $err['image'] = "không đúng định dạng";
            }
        }
        if ($err == []) {
            users_insert($name, $email, $hash_password, $phone, $role_id, $avatar['name']);
            move_uploaded_file($avatar['tmp_name'], "../../content/image/" . $avatar['name']);
            header('location: ' . ADMIN_URL . 'tai-khoan/index.php');
            die;
        }
    }
    $VIEW_NAME = "form-tao-moi.php";
} elseif (isset($_GET['edit'])) {
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
        $avatar = $_FILES['avatar'];
        $prev_img = $_POST['prev_img'];
        $err = [];
        if ($avatar['size'] > 2 * 1024 * 1024) {
            $err['image'] = "Hình đã lớn hơn 2mb";
        } elseif ($avatar['size'] > 0 && $avatar['size'] <= 2 * 1024 * 1024) {

            $ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
            $ext = strtolower($ext);
            if ($ext == 'jpg' || $ext == 'png') {
            } else {
                $err['image'] = "không đúng định dạng";
            }
        }if (!$err) {
            if ($avatar['size'] == 0) {
              $avatar['name'] = $prev_img;
            }
            users_update($get_id, $name, $email, $hash_password, $phone, $role_id, $avatar['name']);
            if ($image['size'] > 0) {
              move_uploaded_file($avatar['tmp_name'], "../../content/image/" . $avatar['name']);
            }
            header("location: " . ADMIN_URL . '/tai-khoan/index.php');
        die;
          }   
    }
    $row = users_select_by_id($get_id);
    $VIEW_NAME = 'edit.php';
} elseif (isset($_GET['delete'])) {
    $get_id = $_GET['id'] ?? "";
    users_delete($get_id);
    header("location: " . ADMIN_URL . 'tai-khoan/index.php');
    die;
} else {

    $users = get_all_users();
    $VIEW_NAME = "list.php";
}

include_once '../layout.php';
?>