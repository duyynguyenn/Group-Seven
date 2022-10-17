<div class=" bg-[#85CC73] mt-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">TẠO MỚI TÀI KHOẢN</span>
        </div>
<form class="mx-[50px]" action="<?= ADMIN_URL . 'tai-khoan/index.php?luu-tao-moi'?>" method="post">
    <div class="my-[15px]">
        <label for="">Tên người dùng</label>
        <input type="text" name="name" class="bg-[#D9D9D9]">
    </div>
    <div  class="my-[15px]">
        <label for="">Email</label>
        <input type="email" name="email" class="bg-[#D9D9D9]">
    </div>
    <div  class="my-[15px]">
        <label for="">Mật khẩu</label>
        <input type="password" name="password" class="bg-[#D9D9D9]">
    </div>
    <div  class="my-[15px]">
        <label for="">Quyền</label>
        <select name="role_id" id="">
            <?php foreach($roles as $role): ?>
                <option value="<?= $role['id']?>"><?= $role['name']?></option>
            <?php endforeach?>
        </select>
    </div>
    <div  class="my-[15px]">
        <button type="submit">Lưu</button>
    </div>
</form>