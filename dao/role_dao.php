<?php

require_once 'base_dao.php';
function role_all(){
    $sql = "select * from roles";
    return pdo_query($sql);
}

function create_user($name, $email, $password, $phone, $role_id, $avatar){
    $sqlQuery = 'insert into users (name, email, password, phone, role_id, avatar) 
                values (?, ?, ?, ?, ?, ?)';
    pdo_execute($sqlQuery, $name, $email, $password, $phone, $role_id, $avatar);
}

function role_destroy($id){
    $removeUserWithRole = "delete from users where role_id = ?";
    pdo_execute($removeUserWithRole, $id);
    $removeRoleQuery = "delete from roles where id = ?";
    pdo_execute($removeRoleQuery, $id);
    
}

?>