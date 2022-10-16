<?php 
require_once '../../global.php';
require_once '../../dao/recipients_dao.php';
// if (isset($_GET['detail'])) {
//     $VIEW_NAME = 'detail.php';
// }else{
    $rows = recipients_select_all();
    $VIEW_NAME = 'list.php';
// }

include_once '../layout.php';
?>