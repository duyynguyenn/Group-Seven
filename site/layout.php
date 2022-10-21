<?php 
require_once '../global.php';
$VIEW_NAME ='';
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
    <img class="py-[30px] " src="<?= CONTENT_URL . '/image/logo.png'?>" alt="">
    <form class="bg-[#AE2B2B] flex h-[76px] w-[482px] rounded-[50px]  my-[25px]">
        <input type="text" name="" id="" value="Tìm sản phẩm" class="pl-[37px] bg-[#AE2B2B] rounded-l-[50px] text-[32px] text-white border-r-2 border-black">
        <button class="ml-[20px] w-[40px]"><img src="<?= CONTENT_URL ?>/image/icons/magnifying.svg" alt=""></button>
    </form>
    <div class="flex  pl-[30px]">
        <a href="" class="flex">
            <p class="text-[30px] text-white my-[30px] w-[91px] leading-[35px]">Giỏ hàng</p>
            <img src="<?= CONTENT_URL ?>/image/icons/bag.svg" class="w-[65px]" alt="">
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

    
    <main>
      
    </main>


  </div>
</body>

</html>