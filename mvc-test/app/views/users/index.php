<?php include PATH . "partials/header.php" ?>

<div class="container">

  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>List of Users</h2>

    <a href="<?= ROOT ?>/users/create" class="btn btn-primary">Add New</a>
  </div>

  <table class="table table-striped mt-3">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th></th>
    </tr>
    <?php if ($users != null) { ?>
      <?php foreach ($users as $item) { ?>
        <tr>
          <td><?= $item->firstname ?></td>
          <td><?= $item->lastname ?></td>
          <td><?= $item->email ?></td>
          <td>
            <a href="<?= ROOT ?>/users/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/users/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td colspan="3">
          <h3>No record found.</h3>
        </td>
      </tr>
    <?php } ?>
  </table>

</div>

<?php include PATH . "partials/footer.php" ?>