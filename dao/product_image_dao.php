<?php
require_once './dao/base_dao.php';
// lấy toàn bộ dữ liệu của bảng
function product_image_select_all()
{
  $sql = "SELECT * FROM product_image";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function product_image_select_by_id($id)
{
  $sql = "SELECT * FROM product_image Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function product_image_insert($id, $image, $product_id)
{
  $sql = "INSERT INTO product (id, image, product_id) values(?,?,?)";
  pdo_execute($sql, $id, $image , $product_id);
}
//cập nhập dữ liệu dựa vào id
function product_image_update($id,$image,$product_id)
{
  $sql = "UPDATE product_image SET id = ?, image = ? where product_id = ?";
  pdo_execute($sql, $id, $image, $product_id);
}
//xoá bản ghi dựa vào id
function product_image_delete($id)
{
  $sql = " delete from product_image where id = ? " ;
  pdo_execute ( $sql , $id ) ;
}
?>