<?php require 'partials/head.php'; ?>
    <!-- View all user -->
    <h1>List users</h1>

    <table style="width:30%;">
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        <!-- render all user in the users table -->
        <?php foreach($users as $user): ?> 
            <tr> 
                <td><?= $id = $user->id; ?></td>
                <td><?= $user->name; ?></td>

                <!-- delete user action  -->
                <td>
                    <form action = "/users/delete" method = "POST">
                        <input name = "id" type = "hidden" value="<?php echo $id; ?>">
                        <input name = "name" type = "hidden" value="<?php echo $name; ?>">
                        <input type = "submit" value = "Delete">
                    </form>
                </td>

                <!-- update user action  -->
                <td>
                    <form action = "/users/update" method = "GET">
                        <input name = "id" type = "hidden" value="<?php echo $id; ?>">
                        <input type = "submit" value = "Update">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- insert user action  -->
    <h1>Submit your name</h1>
    
    <form method="POST" action="/users">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.php'; ?>