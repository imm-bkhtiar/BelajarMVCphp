<div class="container-fluid mt-5">
  <div class="card text-bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header">Detail</div>
    <div class="card-body">
      <h5 class="card-title"><?= $data['contact']['nama'];  ?></h5>
      <p class="card-text" > No. Hp : <?= $data['contact']['nohp']; ?></p>
      <p class="card-text"> Email : <?= $data['contact']['email']; ?></p>
      <a class="badge text-decoration-none text-bg-success" href="<?= DEFAULTURL; ?>contact">< Back</a>
    </div>
  </div>
</div>