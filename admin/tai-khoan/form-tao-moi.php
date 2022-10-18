<div class=" bg-[#85CC73] mt-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">TẠO MỚI TÀI KHOẢN</span>
        </div>
<form class="mx-[50px] mb-[100px]" action="<?= ADMIN_URL . 'tai-khoan/index.php?luu-tao-moi'?>" method="post">
    <div class="my-[25px]">
        <label for="" class="font-semibold">Tên người dùng:</label>
        <input type="text" name="name" class="bg-[#D9D9D9] border border-black">
    </div>
    <div class="">
        <label class="mr-[73px] font-semibold" for="">Email:</label>
        <input type="email" name="email" class="bg-[#D9D9D9] border border-black">
    </div>
    <div class="mt-[25px]">
        <label class="mr-[16px] font-semibold" for="">Số điện thoại:</label>
        <input type="text" name="phone" class="bg-[#D9D9D9] border border-black">
    </div>
    <div  class="my-[25px]  ">
        <label for="" class="font-semibold mr-[43px]">Mật khẩu:</label>
        <input type="password" name="password" class="bg-[#D9D9D9] border border-black">
    </div>
    <div  class="">
        <label for="" class="font-semibold mr-[63px]">Quyền:</label>
        <select name="role_id" id="" class="bg-[#D9D9D9] border border-black w-[190px]">
            <?php foreach($roles as $role): ?>
                <option value="<?= $role['id']?>"><?= $role['name']?></option>
            <?php endforeach?>
        </select>
    </div>
    <div  class="mt-[50px] ml-[90px]">
        <button type="submit" class="font-bold bg-orange-400 rounded-[5px] px-[20px] py-[8px] text-[24px]">Lưu</button>
    </div>
</form>