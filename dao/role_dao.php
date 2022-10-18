<?php

require_once 'base_dao.php';
function role_all(){
    $sql = "select * from roles";
    return pdo_query($sql);
}

function create_user($name, $email, $password, $phone, $role_id){
    $sqlQuery = 'insert into users (name, email, password, phone, role_id) 
                values (?, ?, ?, ?, ?)';
    pdo_execute($sqlQuery, $name, $email, $password, $phone, $role_id);
}

function role_destroy($id){
    $removeUserWithRole = "delete from users where role_id = ?";
    pdo_execute($removeUserWithRole, $id);
    $removeRoleQuery = "delete from roles where id = ?";
    pdo_execute($removeRoleQuery, $id);
    
}

?>