<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= DEFAULTURL;?>css/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand fs-2 fw-bold" href="#">Its-B</a>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?=DEFAULTURL;?>home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= DEFAULTURL;?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= DEFAULTURL;?>contact">Daftar Conctact</a>
      </li>
    </ul>
  </div>
</nav>