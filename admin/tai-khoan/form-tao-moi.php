<div class=" bg-[#85CC73] mt-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">TẠO MỚI TÀI KHOẢN</span>
        </div>
<form class="mx-[50px] mb-[100px]" action="<?= ADMIN_URL . 'tai-khoan/index.php?luu-tao-moi'?>" method="post" enctype="multipart/form-data">
    <div class="my-[25px]">
        <label for="" class="font-semibold">Tên người dùng:</label>
        <input type="text" name="name" class="bg-[#D9D9D9] border border-black">
        <p class="text-red-600"><?= $err['name'] ?? '' ?></p>
    </div>
    <div class="">
        <label class="mr-[73px] font-semibold" for="">Email:</label>
        <input type="email" name="email" class="bg-[#D9D9D9] border border-black">
        <p class="text-red-600"><?= $err['email'] ?? '' ?></p>
    </div>
    <div class="mt-[25px]">
        <label class="mr-[16px] font-semibold" for="">Số điện thoại:</label>
        <input type="text" name="phone" class="bg-[#D9D9D9] border border-black">
        <p class="text-red-600"><?= $err['phone'] ?? '' ?></p>
    </div>
    <div  class="my-[25px]  ">
        <label for="" class="font-semibold mr-[43px]">Mật khẩu:</label>
        <input type="password" name="password" class="bg-[#D9D9D9] border border-black">
        <p class="text-red-600"><?= $err['hash_password'] ?? '' ?></p>
    </div>
    <div  class="">
        <label for="" class="font-semibold mr-[63px]">Quyền:</label>
        <select name="role_id" id="" class="bg-[#D9D9D9] border border-black w-[190px]">
            <?php foreach($roles as $role): ?>
                <option value="<?= $role['id']?>"><?= $role['name']?></option>
            <?php endforeach?>
        </select>
        <p class="text-red-600"><?= $err['role_id'] ?? '' ?></p>
    </div>
    <div class="mt-[25px]">
        <label class="mr-[16px] font-semibold" for="">Ảnh:</label>
        <input type="file" name="avatar" id="" class="bg-[#D9D9D9] rounded-[10px] w-full h-[50px] mb-[15px] pl-[20px] pt-[10px]"><br>
    <p class="text-red-600"><?= $err['image'] ?? '' ?></p>
    </div>
    <div  class="mt-[50px] ml-[40px] flex font-bold">
        <button type="submit" name="submit" class=" bg-orange-400 rounded-[8px] w-[100px] h-[50px] text-[24px] mr-[20px]">Lưu</button>
        <input type="reset" name="" id="" value="Nhập lại"
            class="w-[100px] h-[50px] bg-orange-400 rounded-[8px] text-[24px]">
    </div>
</form>