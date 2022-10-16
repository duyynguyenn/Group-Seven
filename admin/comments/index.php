<?php

    require_once '../../global.php';
    require_once '../../dao/base_dao.php';
    require_once '../../dao/comments_dao.php';

    $list = comments_select_all();
    $VIEW_NAME = 'danh-sach.php';
    include_once '../layout.php';
?>