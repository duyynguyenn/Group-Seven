<?php
    require_once 'base_dao.php';
    require_once './dao/thongke_dao.php';
    $us = users();
    $prd = products();
    $cte = categories();
    $commen = comments();
    $VIEW_NAME = 'tong-hop.php';

    include_once '../layout.php';

?>