<?php
require_once 'base_dao.php';
// lấy toàn bộ dữ liệu của bảng
function users_select_all()
{
  $sql = "SELECT * FROM users";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function users_select_by_id($id)
{
  $sql = "SELECT * FROM users Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function users_insert($name, $email , $password , $phone , $role_id , $avatar )
{
  $sql = "INSERT INTO users (name, email, password, phone, role_id, avatar) values (?,?,?,?,?,?)";
  pdo_execute($sql, $name, $email , $password , $phone , $role_id , $avatar );
}
//cập nhập dữ liệu dựa vào id
function users_update($id, $name, $email , $password , $phone , $role_id , $avatar )
{
  $sql = "UPDATE users SET name = ?, email = ? , password = ? , phone = ? , role_id = ? ,avatar = ? where id = ?";
  pdo_execute($sql, $name, $email , $password , $phone , $role_id , $avatar  , $id);
}
//xoá bản ghi dựa vào id
function users_delete($id)
{
  $removeOder_detailWithUsers = " delete from oder_detail where user_id = ? " ;
  pdo_execute ( $removeOder_detailWithUsers , $id ) ;

  $removeRecipientsWithUsers = " delete from recipients where user_id = ? " ;
  pdo_execute ( $removeRecipientsWithUsers , $id ) ;

  $removeFeedbacksWithUsers = " delete from feedbacks where user_id = ? " ;
  pdo_execute ( $removeFeedbacksWithUsers , $id ) ;

  $removeCommentsWithUsers = " delete from comments where user_id = ? " ;
  pdo_execute ( $removeCommentsWithUsers , $id ) ;
  
  $removeUsersQuery = " delete from users where id = ? " ;
  pdo_execute ( $removeUsersQuery , $id ) ;
}

function user_store($name, $email, $password, $phone, $role_id, $avatar = ''){
  $sql = "insert into users 
              (name, 
              email, 
              password,
              phone, 
              role_id, 
              avatar)
          values 
              (?, ?, ?, ?, ?, ?)";
  pdo_execute($sql, $name, $email, $password, $phone, $role_id, $avatar);
}

function get_all_users(){
  $sql = "select 
              u.*, 
              r.name as role_name
          from users u
          join roles r
              on r.id = u.role_id";
  return pdo_query($sql);
}

// phần test từ đây đến hết
function checkuser($user,$password){
  $conn = pdo_get_connection();
  $stmt = $conn->prepare("SELECT * FROM user WHERE user='".$user."' AND password='".$password."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  if(count($kq)>0) return $kq[0]['role'];
  else return 0;
}

// đăng ký
function getuserinfo($user,$password){
  $conn = pdo_get_connection();
  $stmt = $conn->prepare("SELECT * FROM user WHERE user='".$user."' AND password='".$password."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}

// end

// doan test cua thay

function get_one_user_by_email($email){
  $sql = "select 
              u.*, 
              r.name as role_name
          from users u
          join roles r
              on r.id = u.role_id
          where email = '$email'";
  return pdo_query_one($sql);
}
?>