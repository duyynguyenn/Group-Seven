<?php

    require_once '../nhom7-du-an-mau/global.php';
    require_once '../nhom7-du-an-mau/dao/base_dao.php';
    require_once '../nhom7-du-an-mau/dao/comments_dao.php';
    require_once '../layout.php';

    $list = comments_select_all();
    $VIEW_NAME = 'danh-sach.php';

?>