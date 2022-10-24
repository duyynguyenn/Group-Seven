<?php 
// doan tesst cua thay
session_start();
require_once '../global.php';
require_once '../dao/base_dao.php';
if(isset($_GET['san-pham'])){

}elseif(isset($_GET['login'])){
    $VIEW_NAME = 'login.php';
}elseif(isset($_GET['post-login'])){
    require_once '../dao/users_dao.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    // kiểm tra xem với email nhận đc có tài khoản nào không
    $user = get_one_user_by_email($email);
    if(count($user) > 0){
        // nếu có thì kiểm tra 2 mật - lưu trong db và mk đc gửi từ form
        // xem có khớp đc với nhau hay không
        if(password_verify($password, $user['password'])){
            // nếu khớp thì tạo session auth để lưu thông tin tài khoản
            $_SESSION['auth'] = [
                'email' => $user['email'],
                'name' => $user['name'],
                'role_id' => $user['role_id'],
                'role_name' => $user['role_name']
            ];
            header('location: ' . SITE_URL);
            die;
        }
    }
    

    header('location: ' . SITE_URL . "?login&msg=Tài khoản không chính xác, hãy nhập lại!");
    die;
}
// het phan test cua thay

// require_once '../global.php';
if (isset($_GET['giohang'])) {

  $VIEW_NAME = 'gio_hang.php';
} elseif (isset($_GET['phanhoi'])) {

  $VIEW_NAME = 'phanhoi.php';
} elseif(isset($_GET['gui-binh-luan'])){
  require_once '../../global.php';
  // require_once '../dao/base_dao.php';
  // require_once '../dao/comments_dao.php';
  // $created_at = $_POST['time'];
  // $comment = $_POST['binhluan'];
  // $user_id = "";
  // $product_id = "";

  // comments_insert($created_at, $comment,$user_id,$product_id);
  $VIEW_NAME = 'phanhoi.php';

}elseif (isset($_GET['dangky'])) {

  $VIEW_NAME = 'dangky.php';
} elseif (isset($_GET['dangnhap'])) {

  $VIEW_NAME = 'dangnhap.php';
} elseif (isset($_GET['taikhoan'])) {

  $VIEW_NAME = 'tai_khoan.php';
}
elseif(isset($_GET['chi-tiet'])){
  require_once '../dao/categories_dao.php';
  require_once '../dao/products_dao.php';
  $rows_cate = categories_select_all();
  $get_id = $_GET['id'] ?? "";
  $row = products_select_by_id($get_id);
  $VIEW_NAME = 'chitietsp.php';
}
 else {
  require_once '../dao/products_dao.php';
  $products =  products_select_all();
  $VIEW_NAME = 'home.php';
}






include_once 'layout.php';

?>