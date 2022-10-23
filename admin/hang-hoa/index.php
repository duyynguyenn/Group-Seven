<?php
require_once '../../global.php';
require_once '../../dao/categories_dao.php';
require_once '../../dao/products_dao.php';
if (isset($_GET['add'])) {

    $cate = categories_select_all();
    $VIEW_NAME = "add.php";
} elseif (isset($_GET['insert'])) {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image'];
        $quantity = $_POST['quantity'];
        $category_id = $_POST['category_id'];
        $description = $_POST['description'];
        $err = [];
        

        if ($name == '') {
            $err['name'] = "Cần có dữ liệu";
        }
        if ($price == '') {
            $err['price'] = "Cần có dữ liệu";
        }
        if ($quantity == '') {
            $err['quantity'] = "Cần có dữ liệu";
        }
        if ($description == '') {
            $err['description'] = "Cần có dữ liệu";
        }
        if ($image['size'] == 0) {
            $err['image'] = "Cần có hình";
        } elseif ($image['size'] > 2 * 1024 * 1024) {
            $err['image'] = "Hình đã lớn hơn 2mb";
        } elseif ($image['size'] > 0 && $image['size'] <= 2 * 1024 * 1024) {

            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            $ext = strtolower($ext);
            if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
            } else {
                $err['image'] = "không đúng định dạng";
            }
        }
        if ($err == []) {
            products_insert($name, $price,$image['name'], $quantity,$category_id, $description);
            move_uploaded_file($image['tmp_name'], "../../content/image/" . $image['name']);
            header('location: ' . ADMIN_URL . 'hang-hoa/index.php');
            die;
        }
    }
    $VIEW_NAME = "add.php"; 
}elseif (isset($_GET['edit'])) {
    $rows_cate = categories_select_all();
    $get_id = $_GET['id'] ?? "";
    $row = products_select_by_id($get_id);
    $VIEW_NAME = 'edit.php';
} elseif (isset($_GET['update'])) {
    $rows_cate = categories_select_all();
    $get_id = $_GET['id'] ?? "";
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image'];
        $quantity = $_POST['quantity'];
        $category_id = $_POST['category_id'];
        $description = $_POST['description'];
        $prev_img = $_POST['prev_img'];
        $err = [];
        if ($image['size'] > 2 * 1024 * 1024) {
            $err['image'] = "Hình đã lớn hơn 2mb";
        } elseif ($image['size'] > 0 && $image['size'] <= 2 * 1024 * 1024) {

            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            $ext = strtolower($ext);
            if ($ext == 'jpg' || $ext == 'png') {
            } else {
                $err['image'] = "không đúng định dạng";
            }
        }if (!$err) {
            if ($image['size'] == 0) {
              $image['name'] = $prev_img;
            }
            products_update($get_id,$name, $price,$image['name'], $quantity,$category_id, $description);
            if ($image['size'] > 0) {
              move_uploaded_file($image['tmp_name'], "../../content/image/" . $image['name']);
            }
            header("location: " . ADMIN_URL . '/hang-hoa/index.php');
        die;
          }   
    }
    $row = products_select_by_id($get_id);
    $VIEW_NAME = 'edit.php';
} elseif (isset($_GET['delete'])) {
    $get_id = $_GET['id'] ?? "";
    products_delete($get_id);
    header("location: " . ADMIN_URL . 'hang-hoa/index.php');
    die;
}else {
    $rows = get_all_products();
    $VIEW_NAME = 'list.php';
  }
include_once '../layout.php';
?>