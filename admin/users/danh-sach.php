 
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
            


                <?php endforeach; ?>
        </tbody>
    </table>
    



