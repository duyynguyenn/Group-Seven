<div class=" bg-[#85CC73] mt-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">THÊM MỚI DANH MỤC</span>
        </div>
<form action="index.php?insert" method="post" enctype="multipart/form-data" class="mx-[50px]">
    <p class="mt-[15px]">Tên Loại</p><br>
    <input type="text" value="<?= $name ?? '' ?>" name="name" id="" class="bg-[#D9D9D9] rounded-[10px] w-full h-[50px] mb-[15px] pl-[20px]"><br>
    <p class="text-red-600"><?= $err['name'] ?? '' ?></p>
    <p class="mt-[15px]">Hình ảnh</p><br>
    <input type="file" name="image" id="" class="bg-[#D9D9D9] rounded-[10px] w-full h-[50px] mb-[15px] pl-[20px] pt-[10px]"><br>
    <p class="text-red-600"><?= $err['image'] ?? '' ?></p>
    <div class="flex">
        <input type="submit" name="submit" id="" value="Thêm mới"
            class="w-[100px] h-[50px] mr-[40px] bg-[#D9D9D9] rounded-[8px] ">
        <input type="reset" name="nhap_lai" id="" value="Nhập lại"
            class="w-[100px] h-[50px] bg-[#D9D9D9] rounded-[8px] mr-[40px]">
    </div>
</form>