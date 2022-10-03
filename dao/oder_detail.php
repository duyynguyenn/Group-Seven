<?php
// lấy toàn bộ dữ liệu của bảng
function oder_detail_select_all()
{
  $sql = "SELECT * FROM oder_detail";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function oder_detail_select_by_id($id)
{
  $sql = "SELECT * FROM oder_detail Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function oder_detail_insert($quantity, $product_id,$oder_id,$user_id)
{
  $sql = "INSERT INTO oder_detail (quantity, product_id,oder_id,user_id) values(?,?,?,?)";
  pdo_execute($sql,$quantity, $product_id,$oder_id,$user_id);
}
//cập nhập dữ liệu dựa vào id
function oder_detail_update($id,$quantity, $product_id,$oder_id,$user_id)
{
  $sql = "UPDATE oder_detail SET quantity = ?, product_id = ?, oder_id = ?, user_id = ? where id = ?";
  pdo_execute($sql,$quantity, $product_id,$oder_id,$user_id, $id);
}
//xoá bản ghi dựa vào id
function oder_detail_delete($id)
{
  $sql = "DELETE FROM oder_detail WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
?>