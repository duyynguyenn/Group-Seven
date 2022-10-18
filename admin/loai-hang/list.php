<div class=" bg-[#85CC73] mt-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">DANH SÁCH DANH MỤC</span>
        </div>
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
    <?php if (count($rows) == 0) : ?>
        <?php else : ?>
                <?php foreach ($rows as $row) : ?>
        <tr>
            <td class="border border-slate-300 text-center"><input type="radio" name="" id=""></td>
            <td class="border border-slate-300 text-center"><?= $row['id'] ?? "" ?></td>
            <td class="border border-slate-300 text-center"><?= $row['name'] ?? "" ?></td>
            <td class="border border-slate-300 text-center"><img src="<?= CONTENT_URL ?>/image/<?= $row['image'] ?? "" ?>" alt=""></td>
            <td class="border border-slate-300"><a href="index.php?edit&id=<?= $row['id'] ?? "" ?>" class="bg-[#D9D9D9] py-[3px] px-[10px] ml-[20px] mr-[20px]">Sửa</a>
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