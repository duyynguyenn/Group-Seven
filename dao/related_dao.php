<?php
require_once './dao/base_dao.php';
// lấy toàn bộ dữ liệu của bảng
function related_select_all()
{
  $sql = "SELECT * FROM related";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function related_select_by_id($id)
{
  $sql = "SELECT * FROM related Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function related_insert($name, $image)
{
  $sql = "INSERT INTO related (name, image) values(?,?)";
  pdo_execute($sql, $name, $image);
}
//cập nhập dữ liệu dựa vào id
function related_update($id, $name, $image)
{
  $sql = "UPDATE related SET name = ?, image = ? where id = ?";
  pdo_execute($sql, $name, $image, $id);
}
//xoá bản ghi dựa vào id
function related_delete($id)
{
  $removeProductsWithRelated = " delete from products where related_id = ? " ;
  pdo_execute ( $removeProductsWithRelated , $id ) ;
  $removeRelatedQuery = " delete from related where id = ? " ;
  pdo_execute ( $removeRelatedQuery , $id ) ;
}
?>