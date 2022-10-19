 <h1>Danh Sách Users</h1>
    <table>
        <thead> 
            <tr>
                <th>#</th>
                <th>created-at</th>
                <th>comment</th>
                <th>users-id</th>
                <th>product-id</th>
                
            </tr>
        </thead>
        <tbody> 
            <?php if(count($list)  == 0 ) : ?>
                <p>Comment TRống</p>
                <?php else : ?>
            <?php foreach($list as $value) : ?>
                    <tr>
                        <td> <?php echo $value['id'] ?? "TRống" ?>  </td>
                        <td> <?php echo $value['created-at'] ?? "TRống" ?> </td>
                        <td> <?php echo $value['comment'] ?? "TRống" ?> </td>
                        <td> <?php echo $value['users-id'] ?? "TRống" ?> </td>
                        <td> <img src="<?php echo $value['product-id'] ?? "" ?>" alt="">  </td>
                        
                    </tr>

                <?php endforeach; ?>
                <?php endif; ?>
        </tbody>
    </table>
    



