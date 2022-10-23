<?php 
  session_start();
  ob_start();

  include "../nhom7-du-an-mau/global.php";
  include "../nhom7-du-an-mau/dao/users_dao.php";
  if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
         $user=$_POST['user'];
         $pass = $_POST['pass'];

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>

      <div class="main">
            <h2>login</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
              <input type="text" name="user" id="">
              <input type="text" name="password" id="">
              <input type="submit" name="dangnhap" value="đăng nhập">
            </form>
      </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>