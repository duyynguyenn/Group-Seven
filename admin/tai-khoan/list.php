<div class=" bg-[#85CC73] mt-4 mx-[50px]">
            <span class="leading-[64px]	text-[30px] pl-[20px]">QUẢN LÍ TÀI KHOẢN</span>
        </div>

<div class="mx-[50px] my-[20px] text-[20px] hover:text-red-500">
<a href="<?= ADMIN_URL . 'tai-khoan/index.php?tao-moi'?>">Tạo mới</a>
</div>
<table class="w-[1340px] mx-[50px] mb-[50px]    ">

                <thead class="">
                    <tr class="">
                        <th class="border border-slate-300">STT</th>
                        <th class="border border-slate-300">Tên</th>
                        <th class="border border-slate-300">Email</th>
                        <th class="border border-slate-300">SDT</th>
                        <th class="border border-slate-300">Quyền</th>  
                        <th class="border border-slate-300">Avatar</th>  
                        <th class="border border-slate-300">Thời gian tạo</th>              
                        
                        
                    </tr>
                </thead>
                <tbody class="">
                
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td class="border border-slate-300"><?= $user['id']?></td>
                        <td class="border border-slate-300"><?= $user['name']?></td>
                        <td class="border border-slate-300"><?= $user['email']?></td>
                        <td class="border border-slate-300"><?= $user['phone']?></td>
                        <td class="border border-slate-300"><?= $user['role_name']?></td>
                        <td class="border border-slate-300"><img style="max-width:100px ;" src="<?= CONTENT_URL ?>/image/<?= $user['avatar']?>" alt=""></td>
                        <td class="border border-slate-300"><?= $user['created_at']?></td>
                    </tr>
                    <?php endforeach?>
                    
                </tbody>
           </table>

           
