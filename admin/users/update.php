<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thêm Mới Sản Phẩm</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center text-[36px] font-bold mb-6 mt-4">Cập nhật tài khoản</h1>
    <div class="flex items-center justify-center">
        <form action="" class="w-[600px] rounded-[10px] border border-[#000] p-4 shadow shadow-[#000]" method="POST" enctype="multipart/form-data">
            <div class="">
                <div class="font-bold mb-3 text-[18px]">Mã tài khoản</div>
                <input type="text" name="id" value="<?=$id?>" class="border pl-2 border-[#000] h-[40px] w-[25%] rounded-[10px]" disabled>
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Email</div>
                <input type="text" name="email" value="<?=$email?>" class="border pl-2 border-[#000] h-[40px] w-[75%] rounded-[10px]">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Password</div>
                <input type="text" name="password" value="<?=$password?>" class="border pl-2 border-[#000] h-[40px] w-[75%] rounded-[10px]">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Họ và Tên</div>
                <input type="text" name="fullname" value="<?=$fullname?>" class="border pl-2 border-[#000] h-[40px] w-[75%] rounded-[10px]">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Số điện thoại</div>
                <input type="text" name="phone" value="<?=$phone?>" class="border pl-2 border-[#000] h-[40px] w-[75%] rounded-[10px]">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Địa chỉ</div>
                <input type="text" name="address" value="<?=$address?>" class="border pl-2 border-[#000] h-[40px] w-[75%] rounded-[10px]">
            </div>

            <div class="pt-5">
                <div class="font-bold mb-3 text-[18px]">Tên chức vụ</div>
                <input type="text" name="id_position" value="<?=$id_position?>" class="border pl-2 border-[#000] h-[40px] w-[25%] rounded-[10px]">
                <!-- <select name="id_position" id="">
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select> -->
            </div>

            <div class="pt-5 flex justify-center">
                <button type="submit" class="bg-[#000] text-white w-[200px] text-[20px] h-[40px] hover:bg-red-500" name="btn_update">Cập nhật</button>
            </div>
        </form>
    </div>
</body>
</html>