<?php
require_once 'base_dao.php';
// lấy toàn bộ dữ liệu của bảng
function products_select_all()
{
  $sql = "SELECT * FROM products";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function products_select_by_id($id)
{
  $sql = "SELECT * FROM products Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function products_insert($name, $price,$image, $quantity,$category_id, $description)
{
  $sql = "INSERT INTO products (name, price,image,quantity,category_id,description) values(?,?,?,?,?,?)";
  pdo_execute($sql, $name, $price,$image, $quantity,$category_id, $description);
}
//cập nhập dữ liệu dựa vào id
function products_update($id,$name, $price,$image, $quantity,$category_id, $description)
{
  $sql = "UPDATE products SET name = ?, price = ?, image = ?, quantity = ?,category_id =?,description=? where id = ?";
  pdo_execute($sql,$name, $price,$image, $quantity,$category_id, $description, $id);
}
//xoá bản ghi dựa vào id
function products_delete($id)
{
  $removeProduct_imageWithProducts = " delete from product_image where product_id = ? " ;
  pdo_execute ( $removeProduct_imageWithProducts , $id ) ;
  $removeCommentsWithProducts = " delete from comments where product_id = ? " ;
  pdo_execute ( $removeProduct_imageWithProducts , $id ) ;
  $removeOder_detailWithProducts = " delete from oder_detail where product_id = ? " ;
  pdo_execute ( $removeOder_detailWithProducts , $id ) ;
  $removeProductsQuery = " delete from products where id = ? " ;
  pdo_execute ( $removeProductsQuery , $id ) ;
}
function get_all_products(){
  $sql = "select 
              u.*, 
              r.name as category_name
          from products u
          join categories r
              on r.id = u.category_id";
  return pdo_query($sql);
}
?>

