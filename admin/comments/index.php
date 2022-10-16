<?php

    require_once '../../global.php';
    require_once '../../dao/base_dao.php';
    require_once '../../dao/comments_dao.php';
    require_once '../layout.php';

    $list = comments_select_all();
    $VIEW_NAME = 'danh-sach.php';

?>