<?php require 'partials/head.php'; ?>

    <h1>List users</h1>

    <table style="width:30%;">
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td></td>
            <td>Action</td>
        </tr>
        <?php foreach($users as $user): ?> 
            <tr> 
                <td><?= $id = $user->id; ?></td>
                <td><?= $user->name; ?></td>
                <td><?php $id = $user->id; ?></td>
                <td><?php $name = $user->name; ?></td>
                <td>
                    <form action = "/users/delete" method = "POST">
                        <input name = "id" type = "hidden" value="<?php echo $id; ?>">
                        <input name = "name" type = "hidden" value="<?php echo $name; ?>">
                        <input type = "submit" value = "Delete">
                    </form>
                </td>
                <td>
                    <form action = "/users/update" method = "GET">
                        <input name = "id" type = "hidden" value="<?php echo $id; ?>">
                        <input type = "submit" value = "Update">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1>Submit your name</h1>
    <form method="POST" action="/users">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

    <!-- <h1>Update user</h1>
    <form method="POST" action="/users/update">
        <label for="name">Name: </label>
        <input type="text" name="update" value = "<?php echo $user->name; ?>">
        <button type="save">Save</button>
    </form> -->


<?php require 'partials/footer.php'; ?>