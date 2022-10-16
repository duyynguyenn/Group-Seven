<?php 
const BASE_URL = "http://localhost:81/nhom7-du-an-mau/";
const SITE_URL = BASE_URL . "site/index.php";
const CONTENT_URL = BASE_URL . "content/";
const ADMIN_URL = BASE_URL ."admin/";

function exist_param($fieldname){ 
    return array_key_exists($fieldname, $_REQUEST);
}

?>