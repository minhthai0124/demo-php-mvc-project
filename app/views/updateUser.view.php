<?php require 'partials/head.php'; ?>

    <h1>Update user</h1>
    <form method="POST" action="/users/update">
        <input type="hidden" name="id" value="<?= $user->id ?>">
        <input type="text" name="name" value = "<?php echo $user->name; ?>">
        <input type="submit" value="submit"></input>
    </form>

<?php require 'partials/footer.php'; ?>
