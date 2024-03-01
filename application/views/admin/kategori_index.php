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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/kategori/simpan') ?>">
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            name="nama_kategori"
                            placeholder="Nama Kategori"
                            required="required">
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
        Tambah Kategori
    </button>
</div>
<table class="table">
    <thead>
        <h2>Kategori Konten</h2>
        <hr>
        <tr>
            <th>No</th>
            <th>Nama Kategori Konten</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach($kategori as $aa){ ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $aa['nama_kategori']; ?></td>
            <td>
                <a href="<?= base_url('admin/kategori/delete/'.$aa['id_kategori']); ?>">
                    <button class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus?')">
                        <i class="fa fa-trash" >
                            Delete</i>
                    </button>
                </a>
                <a href="<?= base_url('admin/Kategori/update/'.$aa['id_kategori']); ?>"></a>
                <!-- Button trigger modal -->
                <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal<?=$aa['id_kategori']; ?>">
                    <i class="fa fa-edit">
                        Edit</i>
                </button>

                <!-- Modal -->
                <div
                    class="modal fade"
                    id="exampleModal<?=$aa['id_kategori']; ?>"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?= base_url('admin/kategori/update') ?>">
                                    <input type="hidden" name="id_kategori" value="<?=$aa['id_kategori']; ?>">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nama Kategori</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="nama_kategori"
                                            value="<?= $aa['nama_kategori']; ?>">
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