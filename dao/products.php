<?php
// lấy toàn bộ dữ liệu của bảng
function product_select_all()
{
  $sql = "SELECT * FROM products";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function product_select_by_id($id)
{
  $sql = "SELECT * FROM products Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function product_insert($name, $price, $quantity, $description,$brand,$related_id,$category_id)
{
  $sql = "INSERT INTO products (name, price,quantity,description,brand,related_id,category_id) values(?,?,?,?,?,?,?)";
  pdo_execute($sql, $name, $price, $quantity, $description,$brand,$related_id,$category_id);
}
//cập nhập dữ liệu dựa vào id
function product_update($id,$name, $price, $quantity, $description,$brand,$related_id,$category_id)
{
  $sql = "UPDATE products SET name = ?, price = ?, quantity = ?, description = ?,brand =?,related_id=?, category_id = ? where id = ?";
  pdo_execute($sql,$name, $price, $quantity, $description,$brand,$related_id,$category_id, $id);
}
//xoá bản ghi dựa vào id
function product_delete($id)
{
  $sql = "DELETE FROM products WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}


