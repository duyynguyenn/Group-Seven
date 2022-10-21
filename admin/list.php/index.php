<?php 
require "global.php";
require "../../dao/loai-hang.php";


  // thêm mới loại
  if(isset($_POST['Ten_Loai'])){
$Ten_Loai=$_POST['Ten_Loai'];
loai_insert($Ten_Loai);
  }

  // load lại ds loại
  $dsloai = loai_selectall();

  // var_dump($dsloai);
  foreach ($dsloai as $loai){
    extract($loai); // lấy tên cột in ra

    // hàm xóa tiếp
    if(isset($_GET['Ma_Loai'])){
      loai_delete($_GET['Ma_Loai']);
    }

    //  tạo 1 đường dẫn delete để xóa
    $del_link="demo3.php?Ma_Loai=".$Ma_Loai;
    $edit_link="edit.php?Ma_Loai=".$Ma_Loai;
    echo '<li><a href="#">'.$Ten_Loai.'</a> - <a href="'.$del_link.'">del</a> - <a href="'.$edit_link.'">sửa</a> </li>';
  }
?>

<br>
<br>
<form action="demo3.php" method="post">
  <input type="text" name="Ten_Loai">
  <br>
  <input type="submit" value="Thêm mới">
</form>