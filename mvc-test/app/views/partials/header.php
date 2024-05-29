<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <?php if (!empty($_SESSION['USER'])): ?>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/users">Users</a>
            </li>

          <?php endif; ?>
        </ul>

        <?php if (empty($_SESSION['USER'])): ?>

          <a href="<?= ROOT ?>/login" class="btn btn-secondary">Login</a>

        <?php else: ?>

          <span class="me-3">
            <img class="rounded-circle" height="30px" width="30px" src="<?= ROOT ?>/<?= $_SESSION['USER']->image ?>"
              alt="">
            <?= $_SESSION['USER']->firstname ?>
            <?= $_SESSION['USER']->lastname ?>
          </span>

          <a href="<?= ROOT ?>/logout" class="btn btn-secondary">Logout</a>

        <?php endif; ?>

      </div>
    </div>
  </nav>