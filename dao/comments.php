<?php
// lấy toàn bộ dữ liệu của bảng
function comments_select_all()
{
  $sql = "SELECT * FROM comments";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function comments_select_by_id($id)
{
  $sql = "SELECT * FROM comments Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function comments_insert($name, $image)
{
  $sql = "INSERT INTO comments (created_at,comment,user_id,product_id) values(?,?)";
  pdo_execute($sql,$created_at,$comment,$user_id,$product_id);
}
//cập nhập dữ liệu dựa vào id
function comments_update($id,$created_at,$comment,$user_id,$product_id);
{
  $sql = "UPDATE comments SET created_at = ?, comment = ?, user_id = ?, product_id = ?, where id = ?";
  pdo_execute($sql,$created_at,$comment,$user_id,$product_id);
}
//xoá bản ghi dựa vào id
function comments_delete($id)
{
  $sql = "DELETE FROM comments WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
