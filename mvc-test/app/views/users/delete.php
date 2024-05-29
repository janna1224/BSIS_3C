<?php include PATH . "partials/header.php" ?>

<div class="container">

  <form action="" method="POST" class="mt-5 w-50 mx-auto">
    <h2>Delete User</h2>

    <div class="mb-2">
      <label for="">First Name</label>
      <input name="firstname" disabled value="<?= $user->firstname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="lastname" disabled value="<?= $user->lastname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input name="email" disabled value="<?= $user->email ?>" type="email" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input name="password" disabled value="<?= $user->password ?>" type="password" class="form-control">
    </div>
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>

</div>

<?php include PATH . "partials/footer.php" ?>