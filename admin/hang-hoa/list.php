<div class=" bg-[#85CC73] mt-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">DANH SÁCH HÀNG HÓA</span>
        </div>
<table class="mx-[50px] w-[1340px]">
    <thead>
        <tr>
            <th class="border border-slate-300">Mã</th>
            <th class="border border-slate-300">Tên</th>
            <th class="border border-slate-300">Đơn giá</th>
            <th class="border border-slate-300">Hình ảnh</th>
            <th class="border border-slate-300">Số lượng</th>
            <th class="border border-slate-300">Danh mục</th>
            <th class="border border-slate-300">Mô tả</th>
            <th class="border border-slate-300">Thao tác</th>
        </tr>
    </thead>
    <tbody>
    <!-- <?php if (count($rows) == 0) : ?>
        <?php else : ?> -->
                <?php foreach ($rows as $row) : ?>
        <tr>
            <td class="border border-slate-300 text-center"><?= $row['id'] ?? "" ?></td>
            <td class="border border-slate-300 text-center"><?= $row['name'] ?? "" ?></td>
            <td class="border border-slate-300 text-center"><?= $row['price'] ?? "" ?> VNĐ</td>
            <td class="border border-slate-300 text-center"><img style="max-width:100px ;" src="<?= $row["image"] ?>" alt=""></td>
            <td class="border border-slate-300 text-center"><?= $row['quantity'] ?? "" ?></td>
            <td class="border border-slate-300 text-center"><?= $row['category_name'] ?? "" ?></td>
            <td class="border border-slate-300 text-center"><?= $row['description'] ?? "" ?></td>
            <td class="border border-slate-300">
               <div class="flex mx-[5px]" >
               <a href="index.php?edit&id=<?= $row['id'] ?? "" ?>" class="bg-[#D9D9D9] py-[3px] px-[10px] mr-[10px]">Sửa</a>
                <a href="index.php?delete&id=<?= $row['id'] ?? "" ?>" class="bg-[#D9D9D9] py-[3px] px-[10px]" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a> 
               </div>
            </td>
        </tr>
         <?php endforeach; ?>
              <!-- <?php endif; ?> -->
    </tbody>
</table>

<div class="mt-4 mx-[50px] mb-[100px]">
    <ul class="flex gap-8">
        <li class="bg-green-100 py-3 px-3"> <a href="<?= ADMIN_URL . 'hang-hoa/index.php?add' ?>">Thêm mới</a></li>
    </ul>
</div>