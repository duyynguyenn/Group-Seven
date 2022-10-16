<div class=" bg-[#85CC73] mt-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">KHÁCH HÀNG</span>
        </div>
<form action="" method="post" enctype="multipart/form-data" class="mx-[50px]">
<table class="m-auto  w-full ">
                <thead class="">
                    <tr class="">
                        <th class="border border-slate-300">STT</th>
                        <th class="border border-slate-300">Tên</th>
                        <th class="border border-slate-300">Địa Chỉ</th>
                        <th class="border border-slate-300">SDT</th>
                        <th class="border border-slate-300">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (count($rows) == 0) : ?>
                <p>Chưa có dữ liệu</p>
              <?php else : ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td class="border border-slate-300"><?= $row['id'] ?? "" ?></td>
                        <td class="border border-slate-300"> <?= $row['name'] ?? "" ?></td>
                        <td class="border border-slate-300"><?= $row['address'] ?? "" ?></td>
                        <td class="border border-slate-300"><?= $row['phone'] ?? "" ?></td>
                        <td class="border border-slate-300"><a class="bg-[#E0D0D0] rounded-[5px] py-[2px] px-[2px] ml-[20px]" href="<?= ADMIN_URL . 'khach-hang/index.php?detail' ?>">CHI TIẾT</a></td>
                    </tr>
                    <?php endforeach; ?>
              <?php endif; ?>
                </tbody>
           </table>
</form>
           
