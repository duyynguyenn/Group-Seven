<div class=" bg-[#85CC73] my-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">FORM SỬA HÀNG HÓA</span>
        </div>
<form action="index.php?update&id=<?= $get_id ?>" method="post" enctype="multipart/form-data" >
        <div class="mx-[50px]">
            <p class="font-semibold mb-[15px]">TÊN HÀNG HÓA</p>
            <input type="text" name="name" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px]" value="<?= $row['name'] ?? '' ?>">
            
        </div>
        <div class="mx-[50px]">
            <p class="font-semibold mb-[15px]">ĐƠN GIÁ</p>
            <input type="text" name="price" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px]" value="<?= $row['price'] ?? '' ?>">
        
        </div>
        <div class="mx-[50px]">
        <img src="<?= CONTENT_URL ?>/image/<?= $row['image'] ?? "" ?>" style="max-width:100px ;" class="my-[25px]" alt="">
    <input type="hidden" value="<?= $row['image'] ?>" name="prev_img">
        <p class="font-semibold mb-[15px]">HÌNH ẢNH</p>
        <input type="file" name="image" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px]">
        
    </div>
    
    <div class="mx-[50px]">
        <p class="font-semibold mb-[15px]">SỐ LƯỢNG</p>
        <input type="text" name="quantity" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px]" value="<?= $row['quantity'] ?? '' ?>">
        
    </div>
    
    <div class="mx-[50px]">
    <label for="" class="font-semibold ">DANH MỤC</label><br>
    <?php if (count($rows_cate) == 0) : ?>
        <?php else : ?>
            
        <select name="category_id" id="" class="bg-[#D9D9D9] rounded-[10px] w-[300px] h-[40px] mb-[15px] ">
        <?php foreach ($rows_cate as $cate) : ?>
                <option <?= $cate['id'] == $row['category_id'] ? 'selected' : "" ?> value="<?= $cate['id'] ?? "" ?>">
                  <?= $cate['name'] ?? "" ?>
                </option>
                <?php endforeach; ?>
        </select>
        
        <?php endif ?>
    </div>
    <div class="mx-[50px] mb-[15px]">
        <h2 class=" mb-[15px] font-semibold">MÔ TẢ</h2>
        <textarea class="bg-[#D9D9D9]" name="description" id="" cols="147" rows="6"><?= $row['description'] ?? '' ?></textarea>
        
    </div>
    
    <div class="flex font-bold mx-[50px] mb-[55px]">
        <input type="submit" name="submit" id="" value="Cập nhập"
            class="w-[100px] h-[50px] mr-[40px] bg-[#D9D9D9] rounded-[8px] ">
        <input type="reset" name="nhap_lai" id="" value="Nhập lại"
            class="w-[100px] h-[50px] bg-[#D9D9D9] rounded-[8px] mr-[40px]">
    </div>
</form>