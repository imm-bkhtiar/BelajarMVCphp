<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-10">
      <h3 class="">Daftar Contact</h3> 
      <div class="row">
        <div class="col-8">
          <?php Flasher::flash() ?>
        </div>
      </div>   
      <br>
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">
        Add Contact
      </button>
      <div class="table-responsive">
      <table class="w-100 table table-striped">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th class="text-center" scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($data['contact'] as $contact) : ?>
          <tr>
            <td><?= $contact['nama']; ?></td>
            <td class="text-center">
              <a class="mx-2 text-decoration-none badge text-bg-info" href="<?= DEFAULTURL;?>contact/detail/<?= $contact['id']; ?>">Details</a>
              <a class="text-decoration-none badge text-bg-danger" href="<?= DEFAULTURL;?>contact/delete/<?= $contact['id']; ?>">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
       </table>              
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Add to contact</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= DEFAULTURL ?>contact/add/" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama"placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" required>
        </div>
        <div class="input-group mb-3">
            <input type="number" class="form-control" name="nohp" placeholder="No. hp" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off"  required>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2" autocomplete="off">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="sumbit" class="btn btn-primary">Add Contact</button>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>