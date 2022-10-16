<?php
require_once 'base_dao.php';
// lấy toàn bộ dữ liệu của bảng
function oders_select_all()
{
  $sql = "SELECT * FROM oders";
  return  pdo_query($sql);
}
//lấy 1 bản ghi dựa vào id
function oders_select_by_id($id)
{
  $sql = "SELECT * FROM oders Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm dữ liệu vào bảng
function oders_insert($price, $created_at)
{
  $sql = "INSERT INTO oders (price, created_at) values(?,?)";
  pdo_execute($sql,$price, $created_at);
}
//cập nhập dữ liệu dựa vào id
function oders_update($id,$price, $created_at)
{
  $sql = "UPDATE oders SET price = ?, created_at = ? where id = ?";
  pdo_execute($sql,$price, $created_at, $id);
}
//xoá bản ghi dựa vào id
function oders_delete($id)
{
  $removeOder_detailsWithOders = " delete from oder_detail where oder_id = ? " ;
  pdo_execute ( $removeOder_detailsWithOders , $id ) ;
  $removeOdersQuery = " delete from oders where id = ? " ;
  pdo_execute ( $removeOdersQuery , $id ) ;
}
?>