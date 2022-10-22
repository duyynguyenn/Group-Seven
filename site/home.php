

<div class=" flex justify-center list-none ">

    <div class=" ">
        <div class=" text-center py-4 pb-4 font-bold text-2xl text-red-600 ">
            <p>Thịnh Hành</p>
        </div>

        <div class="grid grid-cols-4 gap-32 flex justify-center ">
            <?php  foreach($products as $value) :  ?>
            <div>
                <div class="py-4">
                    <img src="<?= $value['image'] ?>" alt="">
                </div>
                <a href="" class="text-center text-base font-bold  ">
                    <li> <?php echo $value["name"] ?></li>
                    <li class="py-2 text-red-600"><?php echo $value["price"] ?></li>
                </a>
            </div>
            <?php  endforeach  ?>
        </div>
    </div>