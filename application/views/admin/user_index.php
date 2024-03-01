<div id="hilang">
    <?= $this->session->flashdata('alert',TRUE);?>
</div>
<!-- Modal -->
<div
    class="modal fade"
    id="exampleModalCenter"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/user/simpan') ?>">
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            name="nama"
                            placeholder="Nama"
                            required="required">
                    </div>
                    <!-- -->
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            name="username"
                            placeholder="Username"
                            required="required">
                    </div>
                    <!-- -->
                    <div class="form-group">
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            placeholder="Password"
                            required="required">
                    </div>
                    <!-- -->
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Level</label>
                        <select name="level" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Kontributor">Kontributor</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- TABLE -->
<div class="text-left">
    <!-- Button trigger modal -->
    <button
        type="button"
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#exampleModalCenter">
        Tambah User
    </button>
</div>
<table class="table">
    <thead>
        <h2>Data Pengguna</h2>
        <hr>
        <tr>
            <th>Username</th>
            <th>Nama</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($user as $aa){ ?>
        <tr>
            <td><?= $aa['username']; ?></td>
            <td><?= $aa['nama']; ?></td>
            <td><?= $aa['level']; ?></td>
            <td>
            <a href="<?= base_url('admin/user/delete/'.$aa['id_user']); ?>"><button class="btn btn-danger" onClick="return confirm('Yakin Ingin Menghapus?')"><i class="fa fa-trash" > Delete</i></button></a>
            <a href="<?= base_url('admin/user/edit/'.$aa['username']); ?>"></a>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$aa['id_user']; ?>">
<i class="fa fa-edit"> Edit</i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$aa['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?= base_url('admin/user/update') ?>">
      <input type="hidden" name="id_user" value="<?=$aa['id_user']; ?>">
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            name="username"
                            value="<?= $aa['username']; ?>"
                            readonly>
                    </div>
                    <!-- -->
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nama"
                            value="<?= $aa['nama']; ?>"
                            required="required">
                    </div>
                    <!-- -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
      </div>
    </div>
  </div>
</div>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
