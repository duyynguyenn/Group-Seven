<?php
// lấy toàn bộ dữ liệu của bảng
function feedbacks_select_all()
{
  $sql = "SELECT * FROM feedbacks";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function feedbacks_select_by_id($id)
{
  $sql = "SELECT * FROM feedbacks Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function feedbacks_insert($user_id,$phone,$email,$question);
{
  $sql = "INSERT INTO feedbacks (user_id,phone,email,question) values(?,?)";
  pdo_execute($sql, $user_id, $phone ,$email,$question);
}
//cập nhập dữ liệu dựa vào id
function feedbacks_update($id, $user_id,$phone,$email,$question)
{
  $sql = "UPDATE feedbacks SET user_id = ?, phone = ? ,email = ? ,question = ? where id = ?";
  pdo_execute($sql, $user_id, $phone ,$email,$question);
}
//xoá bản ghi dựa vào id
function feedbacks_delete($id)
{
  $sql = "DELETE FROM feedbacks WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
