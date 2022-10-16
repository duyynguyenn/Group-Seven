<h1 class="mx-[50px] text-[30px]">FORM SỬA DANH MỤC</h1>
<form action="" method="post" enctype="multipart/form-data" class="mx-[50px]">
    <p class="mt-[15px]">Tên Loại</p><br>
    <input type="text" name="ten-loai" id="" class="bg-[#D9D9D9] rounded-[10px] w-full h-[50px] mb-[15px] pl-[20px]"><br>
    <p><?= $err['name'] ?? '' ?></p>
    <p class="mt-[15px]">Hình ảnh</p><br>
    <input type="file" name="image" id="" class="bg-[#D9D9D9] rounded-[10px] w-full h-[50px] mb-[15px] pl-[20px] pt-[10px]"><br>
    <p><?= $err['image'] ?? '' ?></p>
    <div class="flex">
        <input type="submit" name="submit" id="" value="Hoàn tất sửa"
            class="w-[100px] h-[50px] mr-[40px] bg-[#D9D9D9] rounded-[8px] ">
        <input type="submit" name="nhap_lai" id="" value="Nhập lại"
            class="w-[100px] h-[50px] bg-[#D9D9D9] rounded-[8px] mr-[40px]">
        <a href="index.php?btn_list">
            <p class="w-[100px] py-[12px] px-[10px] bg-[#D9D9D9] rounded-[8px] mt-[2px]">Danh sách loại hàng</p>
        </a>
    </div>
</form>