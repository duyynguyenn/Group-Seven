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
        <nav>
            <?php require "menu.php"  ?>
        </nav>
        </div>
        <div>
            <?php include $VIEW_NAME; ?>
        </div>
    </div>
</body>

</html>