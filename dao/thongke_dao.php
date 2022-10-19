<?php
    require_once ('./base_dao.php');
    function users(){
      $sql =   "SELECT COUNT(*) FROM users";
      return  pdo_query($sql);
    };

    function products(){
      $sql =   "SELECT COUNT(*) FROM products";
      return  pdo_query($sql);
    };

    function categories(){
      $sql =   "SELECT COUNT(*) FROM categories";
      return  pdo_query($sql);
    };

    function comments(){
      $sql =   "SELECT COUNT(*) FROM comments";
      return  pdo_query($sql);
    };

?>