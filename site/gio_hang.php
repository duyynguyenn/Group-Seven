<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"  Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="">
    <script src="https://cdn.tailwindcss.com/3.1.3"></script>
    <title>Giỏ hàng</title>
</head>

<body class="m-0 p-0 box-border">
  <div class="mx-[10px] max-w-[1440px] mx-auto">
  <section class="bg-[#253796] flex justify-around ">
    <img class="py-[30px] " src="upload/img/logo.png" alt="">
    <form class="bg-[#AE2B2B] flex h-[76px] w-[482px] rounded-[50px]  my-[25px]">
        <input type="text" name="" id="" value="Tìm sản phẩm" class="pl-[37px] bg-[#AE2B2B] rounded-l-[50px] text-[32px] text-white border-r-2 border-black">
        <button class="ml-[20px] w-[40px]"><img src="upload/icons/magnifying.svg" alt=""></button>
    </form>
    <div class="flex  pl-[30px]">
        <a href="" class="flex">
            <p class="text-[30px] text-white my-[30px] w-[91px] leading-[35px]">Giỏ hàng</p>
            <img src="upload/icons/bag.svg" class="w-[65px]" alt="">
        </a>
        <a href="" class="">
            <p class="my-[30px] ml-[50px] w-[198px] h-[65px] bg-[#FFFFFF] text-[32px] text-center pt-[5px]">Đăng nhập</p>
        </a>
    </div>
    </section>

    <section>
      <ul class="flex text-[32px] justify-around border-black border-b-2 pb-[8px] pt-[8px]">
          <li><a href="" class=" border-r-2 border-black  pr-[40px] pb-[12px] pt-[10px] hover:text-orange-400">Thực phẩm chức năng
          </a></li>
          <li><a href="" class="  pr-[120px] pb-[12px] border-r-2 border-black pt-[10px] hover:text-orange-400">Thuốc</a></li>
          <li><a href="" class=" border-r-2 border-black pr-[120px] pb-[12px] pt-[10px] hover:text-orange-400">Bệnh</a></li>
          <li><a href="" class=" pb-[10px] hover:text-orange-400" >Thông tin hỗ trợ</a></li>
      </ul>
  </section>

    <div id="wrapper">
        <main style="padding-bottom: 4rem;">
            <section class="cart">
                <div class="container-top">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="padding: 1rem 0;">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Giỏ hàng</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">Lịch sử mua hàng</a>
                                </li>
                            </ul>
                            <h2 style="padding-top:2rem" class="">Giỏ hàng</h2>
                        </div>
                        <div class="panel-body"></div>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="font-weight: 500;text-align: center;">
                                    <td width="50px">STT</td>
                                    <td>Ảnh</td>
                                    <td>Tên Sản Phẩm</td>
                                    <td>Giá</td>
                                    <td>Số lượng</td>
                                    <td>Tổng tiền</td>
                                    <td width="50px"></td>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr style="text-align: center;">
                                        <td width="50px">1</td>
                                        <td style="text-align:center">
                                            <input type="file">
                                        </td>
                                        <td>thuốc</td>
                                        <td class="b-500 red"><span>200 VNĐ</span></td>
                                        <td width="100px">2</td>
                                        <td class="b-500 red"><span> 200 VNĐ</span></td>
                                        <td>
                                            <button class="btn btn-danger">Sửa</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger">Xoá</button>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <p>Tổng đơn hàng: <span class="red bold">100<span> VNĐ</span></span></p>
                        <a href=""><button class="btn btn-success">Thanh toán</button></a>
                    </div>
                </div>
            </section>
        </main>
        </div>
</body>
<style>
    .b-500 {
        font-weight: 500;
    }

    .bold {
        font-weight: bold;
    }

    .red {
        color: rgba(207, 16, 16, 0.815);
    }
</style>

</html>