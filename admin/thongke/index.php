<?php
    require_once '../../dao/base_dao.php';
    
    require_once '../../dao/users_dao.php';
    require_once '../../dao/products_dao.php';
    require_once '../../dao/categories_dao.php';
    require_once '../../dao/products_dao.php';
    require_once '../../dao/comments_dao.php';
    include_once "../../global.php";
    $us = users_select_all();
    $prd = products_select_all();
    $cte = categories_select_all();
    $commen = comments_select_all();
    $VIEW_NAME = 'tong-hop.php';

    include_once '../layout.php';

?>