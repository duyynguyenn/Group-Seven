<?php
require_once './dao/base_dao.php';
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
function users_insert($name, $email , $password , $phone , $admin , $avatar , $created_at )
{
  $sql = "INSERT INTO users (name, image) values(?,?,?,?,?,?,?)";
  pdo_execute($sql, $name, $email , $password , $phone , $admin , $avatar , $created_at);
}
//cập nhập dữ liệu dựa vào id
function users_update($id, $name, $email , $password , $phone , $admin , $avatar , $created_at )
{
  $sql = "UPDATE users SET name = ?, email = ? , password = ? , phone = ? , avatar = ? , created_at = ? where id = ?";
  pdo_execute($sql, $name, $email , $password , $phone , $admin , $avatar , $created_at,$id);
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
?>