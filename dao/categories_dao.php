<?php
require_once 'base_dao.php';
// lấy toàn bộ dữ liệu của bảng
function categories_select_all()
{
  $sql = "SELECT * FROM categories";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function categories_select_by_id($id)
{
  $sql = "SELECT * FROM categories Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function categories_insert($name, $image)
{
  $sql = "INSERT INTO categories (name, image) values(?,?)";
  pdo_execute($sql, $name, $image);
}
//cập nhập dữ liệu dựa vào id
function categories_update($id, $name, $image)
{
  $sql = "UPDATE categories SET name = ?, image = ? where id = ?";
  pdo_execute($sql, $name, $image, $id);
}
//xoá bản ghi dựa vào id
function categories_delete($id)
{
  $removeProductsWithCategories = " delete from products where category_id = ? " ;
  pdo_execute ( $removeProductsWithCategories , $id ) ;
  $removeCategoriesQuery = " delete from categories where id = ? " ;
  pdo_execute ( $removeCategoriesQuery , $id ) ;
}
?>
