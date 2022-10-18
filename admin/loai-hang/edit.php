<h1 class="mx-[50px] text-[30px] mb-[50px]">FORM SỬA DANH MỤC</h1>
<form action="index.php?update&id=<?= $get_id ?>" method="post" enctype="multipart/form-data" class="mx-[50px]">
    <p class="mt-[15px]">Tên Loại</p><br>
    <input type="text" name="name" value="<?= $row['name'] ?? '' ?>" class="bg-[#D9D9D9] rounded-[10px] w-full h-[50px] mb-[15px] pl-[20px]"><br>
    <p><?= $err['name'] ?? '' ?></p>
    <img src="<?= CONTENT_URL ?>/image/<?= $row['image'] ?? "" ?>" style="max-width:100px ;" class="my-[25px]" alt="">
    <input type="hidden" value="<?= $row['image'] ?>" name="prev_img">
    <p class="mt-[15px]">Hình ảnh</p><br>
    <input type="file" name="image" id="" class="bg-[#D9D9D9] rounded-[10px] w-full h-[50px] mb-[15px] pl-[20px] pt-[10px]"><br>
    <p><?= $err['image'] ?? '' ?></p>
    <div class="flex mb-[50px]">
        <input type="submit" name="submit" id="" value="Cập nhập"
            class="w-[100px] h-[50px] mr-[40px] bg-[#D9D9D9] rounded-[8px] ">
        <input type="submit" name="" id="" value="Nhập lại"
            class="w-[100px] h-[50px] bg-[#D9D9D9] rounded-[8px] mr-[40px]">
    </div>
</form>