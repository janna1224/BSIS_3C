<?php include PATH."partials/header.php"?>

<div class="container">

    <h2 class="mt-5">LIST OF USERS</h2>

    <a href="users/create/" class="btn btn-danger  mb-3">Add New</a>

<table class="table table-striped">
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php foreach($users as $item) { ?>
    <tr>
        <td><?=$item->firstname ?></td>
        <td><?=$item->lastname ?></td>
        <td><?=$item->email ?></td>
        <td>
            <a href="<?=ROOT?>/users/edit/<?=$item->id?>" class="btn btn-success-sm">Edit</a>
            <a href="<?= ROOT ?>/users/delete/<?= $item->id ?>" class="btn btn-danger-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
</div>


<?php include PATH."partials/footer.php"?>