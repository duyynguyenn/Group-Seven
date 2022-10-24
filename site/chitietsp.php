
        <section>
            <div class="grid grid-cols-2 gap-[93px]">
           
                <div>
                    <img class="ml-[64px] mt-[20px]" src="<?= CONTENT_URL ?>/image/<?= $row['image'] ?>" alt="">
                </div>
                <div class="mt-[23px]">
                    <p class="text-[36px] font-medium my-[12px]" ><?= $row['name'] ?></p>
                    <h3 class="text-[40px] font-bold"><?= $row['price'] ?></h3>
        
                    <!-- <?php foreach ($rows_cate as $cate) : ?>
                <option <?= $cate['id'] == $row['category_id'] ? 'selected' : "" ?> value="<?= $cate['id'] ?? "" ?>">
                  <a href=""><?= $cate['name'] ?? "" ?></a>
                </option>
                <?php endforeach; ?> -->
                
                    <p class="font-bold">Chi tiết sản phẩm <p><?= $row['description'] ?></p></p>
                    <div class="flex"><p class="font-bold">Số lượng còn : <p> <?= $row['quantity'] ?> Hộp</p> </p></div>
                    <p class="text-[24px] font-bold mt-[22px]">Chọn số lượng:</p>
                    <form class="text-white text-[30px] font-bold" action="gio_hang.php" method="post">     
<<<<<<< HEAD
                        <input type="number" name="soluong" min="1" max="10" value="1" class="bg-[#F7EEEE] text-black"><br>
                        <input type="submit" name="addcart" value="Đặt hàng">
                        <input type="hidden" name="tensp" value="Hộp">
                        <input type="hidden" name="gia" value="300.000">
                        <input type="hidden" name="hinh" value="5.png">
=======
                       
                    </form>
                </div>
            </div>
        </section>
        <section class="mt-[27px] ml-[79px] mr-[46px]">
            <div class="flex mb-[18px]">
                <div class="">
                    <img src="<?= CONTENT_URL . 'image/ngoi-sao.png' ?>" alt="">
                </div>
                <p class="text-[32px] font-bold ml-[21px] mt-[15px]">Sản phẩm liên quan</p>
            </div>
            <div class="grid grid-cols-3 gap-[56px] mb-[80px]">
                <div class="bg-[#F7EEEE] block text-center font-bold rounded-[20px]">
                    <img src="image/menu1.png" class="w-[225px] mx-[85px] mt-[17px]">
                    <p class="text-[20px] my-[20px]">Viên uống Trùng Thảo Gold giúp ngủ ngon thành công</p>
                   <form action="gio_hang.php" method= "post">
                   <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                    <input type="hidden" name="tensp" value="Viên uống Trùng Thảo Gold giúp ngủ ngon thành công">
                    <input type="hidden" name="gia" value="115.000">
                    <input type="hidden" name="hinh" value="1.png">
                   </form>
                </div>
                <div class="bg-[#F7EEEE] block text-center font-bold rounded-[20px]">
                    <img src="image/menu1.png" class="w-[225px] mx-[85px] mt-[17px]">
                    <p class="text-[20px] my-[20px]">Viên uống Trùng </p>
                    <form action="gio_hang.php" method= "post">
                   <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                    <input type="hidden" name="tensp" value="Viên uống Trùng ">
                    <input type="hidden" name="gia" value="200.000">
                    <input type="hidden" name="hinh" value="2.png">
                   </form>
                </div>
                <div class="bg-[#F7EEEE] block text-center font-bold rounded-[20px]">
                    <img src="image/menu1.png" class="w-[225px] mx-[85px] mt-[17px]">
                    <p class="text-[20px] my-[20px]">Viên uống giúp ngủ ngon thành công</p>
                    <form action="gio_hang.php" method= "post">
                   <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                    <input type="hidden" name="tensp" value="Viên uống giúp ngủ ngon thành công">
                    <input type="hidden" name="gia" value="300.000">
                    <input type="hidden" name="hinh" value="3.png">
                   </form>
                </div>
            </div>
        </section>
        <section class="mx-[85px]">
            <p class="w-full py-[30px] pl-[51px] bg-[#F1EBEB] text-[24px] font-bold rounded-[10px] mb-[25px]">Bình luận</p>
            <form class="mx-[15px] grid grid-cols-2 gap-[540px] font-bold text-[32px]">
                <input type="text" value="Nhập nội dung:" class="text-black mx-auto ">
                <input type="submit" value="Gửi bình luận" class="bg-[#4158A9] py-[13px] w-[325px] text-center text-white rounded-[50px]">
            </form>
            <textarea class="bg-[#F1EBEB] rounded-[50px] mt-[39px] mb-[54px]" name="" id="" cols="163" rows="11"></textarea>
        </section>

    
