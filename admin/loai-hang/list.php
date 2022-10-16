<h1 class="mx-[50px] text-[30px]">DANH SÁCH DANH MỤC</h1>
<table class="mx-[50px] w-[1340px]">
    <thead>
        <tr>
            <th class="border border-slate-300"></th>
            <th class="border border-slate-300">Mã</th>
            <th class="border border-slate-300">Tên Danh mục</th>
            <th class="border border-slate-300">Hình ảnh</th>
            <th class="border border-slate-300">Thao tác</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td class="border border-slate-300 text-center"><input type="radio" name="" id=""></td>
            <td class="border border-slate-300 text-center">1</td>
            <td class="border border-slate-300 text-center">Thuốc</td>
            <td class="border border-slate-300 text-center"><img src="<?= CONTENT_URL .'/image/1.png' ?>" alt=""></td>
            <td class="border border-slate-300"><a href="<?= ADMIN_URL. 'loai-hang/index.php?edit' ?>" class="bg-[#D9D9D9] py-[3px] px-[10px] ml-[20px] mr-[20px]">Sửa</a>
                <a href="" class="bg-[#D9D9D9] py-[3px] px-[10px]">Xóa</a> 
            </td>
    </tbody>
    <tbody>
    <?php if (count($rows) == 0) : ?>
        <?php else : ?>
                <?php foreach ($rows as $row) : ?>
        <tr>
            <td class="border border-slate-300 text-center"><input type="radio" name="" id=""></td>
            <td class="border border-slate-300 text-center"><?= $row['id'] ?? "" ?></td>
            <td class="border border-slate-300 text-center"><?= $row['name'] ?? "" ?></td>
            <td class="border border-slate-300 text-center"><img src="<?= CONTENT_URL ?>/image/<?= $row['image'] ?? "" ?>" alt=""></td>
            <td class="border border-slate-300"><a href="<?= ADMIN_URL. 'loai-hang/index.php?edit' ?>" class="bg-[#D9D9D9] py-[3px] px-[10px] ml-[20px] mr-[20px]">Sửa</a>
                <a href="" class="bg-[#D9D9D9] py-[3px] px-[10px]">Xóa</a> 
            </td>
        </tr>
         <?php endforeach; ?>
              <?php endif; ?>
    </tbody>
</table>

<div class="mt-4 mx-[50px]">
    <ul class="flex gap-8">
        <li class="bg-green-100 py-3 px-3"><a href="">chọn tất cả</a></li>
        <li class="bg-green-100 py-3 px-3"><a href="">bỏ chọn tất cả</a></li>
        <li class="bg-green-100 py-3 px-3"><a href="">xóa các mục chọn </a></li>
        <li class="bg-green-100 py-3 px-3"> <a href="<?= ADMIN_URL . 'loai-hang/index.php?add' ?>">Thêm mới</a></li>
    </ul>
</div>