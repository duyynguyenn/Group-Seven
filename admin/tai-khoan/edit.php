<div class=" bg-[#85CC73] mt-4 mx-[50px]">
    <span class="leading-[64px]	text-[30px] pl-[20px]">FORM SỬA TÀI KHOẢN</span>
</div>
<form class="mx-[50px] mb-[100px]" action="index.php?update&id=<?= $get_id ?>" method="post" enctype="multipart/form-data">
    <div class="my-[25px]">
        <label for="" class="font-semibold">Tên người dùng:</label>
        <input type="text" name="name" class="bg-[#D9D9D9] border border-black" value="<?= $row['name'] ?? '' ?>">
    </div>
    <div class="">
        <label class="mr-[73px] font-semibold" for="">Email:</label>
        <input type="email" name="email" class="bg-[#D9D9D9] border border-black" value="<?= $row['email'] ?? '' ?>">
    </div>
    <div class="mt-[25px]">
        <label class="mr-[16px] font-semibold" for="">Số điện thoại:</label>
        <input type="text" name="phone" class="bg-[#D9D9D9] border border-black" value="<?= $row['phone'] ?? '' ?>">
    </div>
    <div class="my-[25px]  ">
        <label for="" class="font-semibold mr-[43px]">Mật khẩu:</label>
        <input type="password" name="password" class="bg-[#D9D9D9] border border-black"
            value="<?= $row['password'] ?? '' ?>">
    </div>
    <div class="">
        <label for="" class="font-semibold mr-[63px]">Quyền:</label>
        <select name="role_id" id="" class="bg-[#D9D9D9] border border-black w-[190px]">
            <option value="1" <?php echo $row['role_id']==1 ? 'selected' : ""; ?>>Quản trị</option>
            <option value="2" <?php echo $row['role_id']==2 ?'selected' : ""; ?>>Thành viên</option>
        </select>
    </div>
    <div class="mt-[25px]">
    <img src="<?= CONTENT_URL ?>/image/<?= $row['avatar'] ?? "" ?>" style="max-width:100px ;" class="my-[25px]" alt="">
    <input type="hidden" value="<?= $row['avatar'] ?>" name="prev_img">
        <label class="mr-[16px] font-semibold" for="">Ảnh:</label>
        <input type="file" name="avatar" id="" class="bg-[#D9D9D9] rounded-[10px] w-full h-[50px] mb-[15px] pl-[20px] pt-[10px]"><br>
    </div>
    <div class="mt-[50px] ml-[40px] flex font-bold">
        <button type="submit" name="submit" class=" bg-orange-400 rounded-[8px] w-[120px] h-[50px] text-[24px] mr-[20px]">Cập
            nhập</button>
        <input type="reset" name="" id="" value="Nhập lại"
            class="w-[100px] h-[50px] bg-orange-400 rounded-[8px] text-[24px]">
    </div>
</form>