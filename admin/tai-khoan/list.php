<div class=" bg-[#85CC73] mt-4 mx-[50px]">
    <span class="leading-[64px]	text-[30px] pl-[20px]">QUẢN LÍ TÀI KHOẢN</span>
</div>
<table class="w-[1340px] mx-[50px] ">

    <thead class="">
        <tr class="">
            <th class="border border-slate-300">STT</th>
            <th class="border border-slate-300">Tên</th>
            <th class="border border-slate-300">Email</th>
            <th class="border border-slate-300">SDT</th>
            <th class="border border-slate-300">Quyền</th>
            <th class="border border-slate-300">Avatar</th>
            <th class="border border-slate-300">Thao tác</th>


        </tr>
    </thead>
    <tbody class="">

        <?php foreach ($users as $user): ?>
        <tr>
            <td class="border border-slate-300">
                <?= $user['id'] ?>
            </td>
            <td class="border border-slate-300">
                <?= $user['name'] ?>
            </td>
            <td class="border border-slate-300">
                <?= $user['email'] ?>
            </td>
            <td class="border border-slate-300">
                <?= $user['phone'] ?>
            </td>
            <td class="border border-slate-300">
                <?= $user['role_name'] ?>
            </td>
            <td class="border border-slate-300"><img style="max-width:100px ;"
                    src="<?= CONTENT_URL ?>/image/<?= $user['avatar'] ?>" alt=""></td>
            <td class="border border-slate-300">
                <a href="index.php?edit&id=<?= $user['id']?>" class="bg-[#D9D9D9] py-[3px] px-[10px]">Sửa</a>
                <a href="index.php?delete&id=<?= $user['id']?>" class="bg-[#D9D9D9] py-[3px] px-[10px]" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
            </td>
        </tr>
        <?php endforeach ?>

    </tbody>
</table>
<div class="mt-2 mx-[50px] mb-[100px]">
    <ul class="flex gap-8">
        <li class="bg-green-100 py-3 px-3"> <a href="<?= ADMIN_URL . 'tai-khoan/index.php?tao-moi' ?>">Thêm mới</a></li>
    </ul>
</div>