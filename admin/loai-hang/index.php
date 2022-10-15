<?php 
require_once '../../global.php';
if (isset($_GET['add'])) {
    $VIEW_NAME = 'add.php';
}else if(isset($_GET['edit'])){
    $VIEW_NAME = 'edit.php';
}else if(isset($_GET['remote'])){
    header("location: " . ADMIN_URL . 'loai-hang/index.php');   
    die;
}else{
    $VIEW_NAME = 'list.php';
}

include_once '../layout.php';
?>