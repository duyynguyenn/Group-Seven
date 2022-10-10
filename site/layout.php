<?php 
require_once '../global.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="mx-[10px] max-w-[1440px] mx-auto">
    <section class="bg-[#253796] flex justify-around ">
    <img class="py-[30px] " src="<?= CONTENT_URL ?>/img/logo.png" alt="">
    <form class="bg-[#AE2B2B] flex h-[76px] w-[482px] rounded-[50px]  my-[25px]">
        <input type="text" name="" id="" value="Tìm sản phẩm" class="pl-[37px] bg-[#AE2B2B] rounded-l-[50px] text-[32px] text-white border-r-2 border-black">
        <button class="ml-[20px] w-[40px]"><img src="<?= CONTENT_URL ?>/img/icons/magnifying.svg" alt=""></button>
    </form>
    <div class="flex  pl-[30px]">
        <a href="" class="flex">
            <p class="text-[30px] text-white my-[30px] w-[91px] leading-[35px]">Giỏ hàng</p>
            <img src="<?= CONTENT_URL ?>/img/icons/bag.svg" class="w-[65px]" alt="">
        </a>
        <a href="" class="">
            <p class="my-[30px] ml-[50px] w-[198px] h-[65px] bg-[#FFFFFF] text-[32px] text-center pt-[5px]">Đăng nhập</p>
        </a>
    </div>
    </section>

    <section>
        <ul class="flex text-[32px] justify-around  ">
            <li><a href="Trangchu.html" class=" border-r-2 border-black pr-[40px] pb-[10px]">Thực phẩm chức năng
            </a></li>
            <li><a href="ChitietSP.html" class="  pr-[120px] pb-[10px] border-r-2 border-black">Thuốc</a></li>
            <li><a href="Hoidap.html" class=" border-r-2 border-black pr-[120px] pb-[10px]">Bệnh</a></li>
            <li><a href="" class=" pb-[10px]" >Thông tin hỗ trợ</a></li>
        </ul>
    </section>
    <section class="mt-[10px]">
        <img src="image/banner.png" alt="">
    </section>
    <div class=" flex justify-center list-none ">

      <div class=" ">
        <div class=" text-center py-4 pb-4 font-bold text-2xl text-red-600 ">
          <p>Thịnh Hành</p>
        </div>
        <div class="grid grid-cols-4 gap-32 flex justify-center ">
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/ảnh thuốc siro,forte-mom 1.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/trùng thảo 1.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/thuốc baywod 1.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/shark-catilage 1.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/active lung 1.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/best-king 1.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/plus echina 1.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>img/kids 1.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
        </div>
        <div class=" text-center py-4 pb-4 font-bold text-2xl text-red-600 py-12 mt-4 ">
          <p>Thuốc bôi ngoài da</p>
        </div>
        <div class="grid grid-cols-4 gap-32 flex justify-center ">
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/1.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>img/2.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/3.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/4.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>img/5.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/6.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/7.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
          <div>
            <div class="py-4">
              <img src="<?= CONTENT_URL ?>/img/8.png" alt="">
            </div>
            <a href="" class="text-center text-base font-bold  ">
              <li>Siro bổ phế Bối Mẫu Forte
                Mom And Baby Tất Thành</li>
              <li class="py-2 text-red-600">49.000đ / Chai</li>
            </a>
          </div>
        </div>
      </div>
    </div>
    <section class="bg-[#D9D9D9] text-[12px] font-bold mt-4">
      <div class="flex justify-around py-[50px]">
          <div class="block leading-[40px]">
              <ul><li><a href="">Về chúng tôi</a></li>
                  <li><a href="">Thuốc</a></li>
                  <li><a href="">Bệnh</a></li></ul>
          </div>
          <div class="block leading-[40px]">
              <ul>
                  <li><a href="">Bảo vệ sức khỏe</a></li>
                  <li><a href="">Trang thiết bị y tế</a></li>
                  <li><a href="">Góc sức khỏe</a></li>
              </ul>
          </div>
          <div class="block leading-[40px]">
              <ul>
                  <li><a href="">Vitamin</a></li>
                  <li><a href="">Hỗ trợ điều trị</a></li>
                  <li><a href="">Cải thiện tăng sức đề kháng</a></li>
              </ul>
          </div>
          <div class="bg-[#DC1212] w-[271px] h-[135px] rounded-[20px]">
              
              <a href=""><p class="leading-[90px] text-white text-center mb-[20px]">Tải ứng dụng mua thuốc trực tuyến</p></a>
              <div class="flex space-x-7 -mt-[35px] ml-[10px]">
                  <img src="<?= CONTENT_URL ?>/img/ap.png" alt="">
                  <img src="<?= CONTENT_URL ?>/img/gg.png" alt="">
              </div>
          </div>
      </div>
  </section>
  </div>
</body>

</html>