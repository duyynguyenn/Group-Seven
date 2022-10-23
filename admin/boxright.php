<div>tài khoản</div>
<div>
  <?php 
  if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
  
  ?>
  <div>
    xin chào <?=$user ?>
  </div>

        <div>
        <li>
          <a href="#">Quên mật khẩu</a>
        </li>
        <?php if($role==1) ?>
        <li>
          <a href="index.php?act=dangky">đănh nhập admin</a>
        </li>
        </div>
<?php }else{ ?>

  <form action="#" method="post" enctype="multipart/form">
        <div>
          tên đăng nhập
          <input type="text" name="user" id="">
        </div>

        <div>
          mật khẩu <br>
          <input type="password" name="pass" id="">
        </div>

        <div>
          <input type="checkbox" name="" id="">ghi nhớ tài khoản
        </div>
        
        <div>
          <input type="submit" value="đăng nhập">
        </div>
        <li>
          <a href="#">Quên mật khẩu</a>
        </li>
        <li>
          <a href="index.php?act=dangky">đăng ký thành viên</a>
        </li>
  </form>
  <?php } ?>
</div>