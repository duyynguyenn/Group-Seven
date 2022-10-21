<div class=" bg-[#85CC73] my-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">THÊM MỚI HÀNG HÓA</span>
        </div>
<form action="<?= ADMIN_URL . 'hang-hoa/index.php?insert'?>" method="post" enctype="multipart/form-data">
        <div class="mx-[50px]">
            <p class="font-semibold mb-[15px]">TÊN HÀNG HÓA</p>
            <input type="text" name="name" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px]">
            <p class="text-red-600"><?= $err['name'] ?? '' ?></p>
        </div>
        <div class="mx-[50px]">
            <p class="font-semibold mb-[15px]">ĐƠN GIÁ</p>
            <input type="number" name="price" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px]">
            <p class="text-red-600"><?= $err['price'] ?? '' ?></p>
        </div>
        <div class="mx-[50px]">
        <p class="font-semibold mb-[15px]">HÌNH ẢNH</p>
        <input type="file" name="image" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px]">
        <p class="text-red-600"><?= $err['image'] ?? '' ?></p>
    </div>
    
    <div class="mx-[50px]">
        <p class="font-semibold mb-[15px]">SỐ LƯỢNG</p>
        <input type="text" name="quantity" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px]">
        <p class="text-red-600"><?= $err['quantity'] ?? '' ?></p>
    </div>
    
    <div class="mx-[50px]">
    <label for="" class="font-semibold ">DANH MỤC</label><br>
        <select name="category_id" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px] ">
            <?php foreach($cate as $cates): ?>
                <option value="<?= $cates['id']?>"><?= $cates['name']?></option>
            <?php endforeach?>
        </select>
    </div>
    <div class="mx-[50px] mb-[15px]">
        <h2 class=" mb-[15px] font-semibold">MÔ TẢ</h2>
        <textarea class="bg-[#D9D9D9]" name="description" id="" cols="147" rows="6"></textarea>
        <p class="text-red-600"><?= $err['description'] ?? '' ?></p>
    </div>
    
    <div class="flex font-bold mx-[50px] mb-[55px]">
        <input type="submit" name="submit" id="" value="Thêm mới"
            class="w-[100px] h-[50px] mr-[40px] bg-[#D9D9D9] rounded-[8px] ">
        <input type="reset" name="nhap_lai" id="" value="Nhập lại"
            class="w-[100px] h-[50px] bg-[#D9D9D9] rounded-[8px] mr-[40px]">
    </div>
</form>