 
    <h1>Danh Sách Users</h1>
    <table>
        <thead> 
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Mail</th>
                <th>Phone</th>
                <th>Avatar</th>
            </tr>
        </thead>
        <tbody> 
            <?php if(count($list)  == 0 ) : ?>
                <p>Danh Sách TRống</p>
                <?php else : ?>
            <?php foreach($list as $value) : ?>
                    <tr>
                        <td> <?php echo $value['id'] ?? "TRống" ?>  </td>
                        <td> <?php echo $value['name'] ?? "TRống" ?> </td>
                        <td> <?php echo $value['email'] ?? "TRống" ?> </td>
                        <td> <?php echo $value['phone'] ?? "TRống" ?> </td>
                        <td> <img src="<?php echo $value['avatar'] == '' ?: "https://png.pngtree.com/png-vector/20190805/ourlarge/pngtree-account-avatar-user-abstract-circle-background-flat-color-icon-png-image_1650938.jpg" ?>" alt="">  </td>

                    </tr>

                <?php endforeach; ?>
                <?php endif; ?>
        </tbody>
    </table>
    



