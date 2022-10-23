<?php
    // require_once "./global.php";

    //Gọi tất cả bảng
    function user_selectall(){
        $sql = "SELECT * from users";
        return pdo_query($sql);
    }

    // Gọi hàm khách hàng theo id
    function user_select_id($id){
        $sql = "SELECT * from users where id=?";
        return pdo_query_one($sql,$id);
    }

    //Thêm khách hàng
    function user_insert($password,$fullname,$email,$phone,$address,$id_position){
        $sql = "INSERT INTO users(password,fullname,email,phone,address,id_position) VALUES(?,?,?,?,?,?)";
        pdo_execute($sql,$password,$fullname,$email,$phone,$address,$id_position);
    }
     //Thêm tài khoản
     function user_insert_register($password,$name,$email){
        $sql = "INSERT INTO users(password,name,email VALUES(?,?,?)";
        pdo_execute($sql,$password,$name,$email);
    }
    function user_update($password,$fullname,$email,$phone,$address,$id_position,$id){
        $sql = "UPDATE users SET password = ?,fullname = ?,email = ?,phone = ?,address = ?,id_position = ? WHERE id = ?";
        pdo_execute($sql,$password,$fullname,$email,$phone,$address,$id_position,$id);
    }

    //Xóa khách hàng
    function user_delete($id){
        $sql = "delete from users where id = ?";
        pdo_execute($sql, $id);
    }

    function user_login($email,$password){
        $sql = "SELECT * from users where email = '$email' AND password = '$password'";
        pdo_login($sql,$email,$password);
    }
?>