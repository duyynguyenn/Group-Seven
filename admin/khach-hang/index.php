<?php 
require_once '../../global.php';
require_once '../../dao/base_dao.php';
require_once '../../dao/users_dao.php';
if (isset($_GET['detail'])) {
    $VIEW_NAME = 'detail.php';
}else{
    $rows = users_select_all();
    $VIEW_NAME = 'list.php';
}

include_once '../layout.php';
?>