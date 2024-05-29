<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" enctype="multipart/form-data" class="mt-5 w-50 mx-auto">
        <h2>Create User</h2>

        <!-- ALERT MESSAGE -->
        <?php if (!empty($errors)): ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">

                <?php foreach ($errors as $error): ?>

                    <?= $error . "<br>" ?>

                <?php endforeach; ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php endif; ?>

        <input type="hidden" name="token">

        <div class="mb-2">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-2">
            <label for="">Role</label>
            <select name="role" class="form-control">
                <option <?= get_select('role', '') ?> value="">Choose a Role</option>
                <option <?= get_select('role', 'Admin') ?> value="Admin">Admin</option>
                <option <?= get_select('role', 'User') ?> value="User">User</option>
            </select>
        </div>

        <div class="mb-2">
            <label for="">First Name</label>
            <input name="firstname" value="<?= get_var('firstname') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lastname" value="<?= get_var('lastname') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Email</label>
            <input name="email" value="<?= get_var('email') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<?= get_var('password') ?>" type="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>