<h1 class=" bg-[#85CC73] my-8 mx-[50px]">thống kê</h1>

<div class="grid grid-cols-2 mx-[50px] gap-16">
    <div class="user">
        <h1>Tổng user</h1>
        <p>
        <?php echo count($us) ?>
        </p>
    </div>
    <div class="products">
        <h1>Tổng products</h1>
        <p>
            <?php echo count($prd) ?>
           
        </p>
    </div>
    <div class="categories">
        <h1>Tổng categories</h1>
        <p>
        <?php echo count($cte) ?>
        </p>
    </div>
    <div class="comments">
        <h1>Tổng comment</h1>
        <p>
        <?php echo count($commen) ?>
        </p>
    </div>
</div>