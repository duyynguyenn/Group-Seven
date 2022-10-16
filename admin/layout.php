<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="m-0 p-0 box-border">
    <div class="mx-[16px] max-w-[1440px] mx-auto ">
        <h2 class="py-[33px] pl-[20px] bg-[#892B2B] text-white mx-[50px] text-[36px] mt-[50px]">QUẢN TRỊ WEBSITE</h2>
        <div class="bg-[#785454] py-[35px] mx-[50px] my-[40px]">

        <ul class="text-white flex text-[30px] ml-[20px] space-x-10">
                <li><a href="<?= ADMIN_URL ?>" class="hover:text-black">Trang chủ</a></li>
                <li><a href="<?= ADMIN_URL . 'loai-hang/index.php' ?>" class="hover:text-black">Loại hàng</a></li>
                <li><a href="/hang-hoa/" class="hover:text-black">Hàng hóa</a></li>
                <li><a href="/khach-hang/" class="hover:text-black">Khách hàng</a></li>
                <li><a href="/binh-luan/" class="hover:text-black">Bình luận</a></li>
                <li><a href="/thong-ke/" class="hover:text-black">Thống kê</a></li>
            </ul>

        </div>
        <main>

            <?php include_once $VIEW_NAME ?>

        </main>
    </div>
</body>

</html>