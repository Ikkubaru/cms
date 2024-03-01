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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Konten</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form
                    method="post"
                    action="<?= base_url('admin/konten/simpan') ?>"
                    enctype='multipart/form-data'>
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            name="judul"
                            placeholder="Judul"
                            required="required">
                    </div>
                    <div class="form-group">
                        <select name="id_kategori" class="form-control">
                            <?php foreach($kategori as $aa){ ?>
                            <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="keterangan" placeholder="Keterangan" class="form-control" cols="30" rows="10" required>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input
                            type="file"
                            class="form-control"
                            name="foto"
                            accept="image/png, image/jpg, image/jpeg">
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
        Tambah Konten
    </button>
</div>
<table class="table">
    <thead>
        <h2>Konten</h2>
        <hr>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Konten</th>
            <th scope="col">Kategori Konten</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Kreator</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach($konten as $aa){ ?>
        <tr>
            <td scope="row"><?= $no++?></td>
            <td scope="row"><?= $aa['judul']; ?></td>
            <td scope="row"><?= $aa['nama_kategori']; ?></td>
            <td scope="row"><?= $aa['tanggal']; ?></td>
            <td scope="row"><?= $aa['nama']; ?></td>
            <td scope="row">
                <!-- <img src="<?= base_url('assets/upload/konten/' .$aa['foto']) ?>"
                width="150px" height="80px"> -->
                <a href="<?= base_url('assets/upload/konten/' .$aa['foto']) ?>" target="blank">
                    <i class="fa fa-search-plus">
                        Lihat Foto</i>
                </a>
            </td>
            <td>
                <a href="<?= base_url('admin/konten/delete/'.$aa['foto']); ?>">
                    <button
                        class="btn btn-danger"
                        onclick="return confirm('Yakin Ingin Menghapus?')">
                        <i class="fa fa-trash">
                            Delete</i>
                    </button>
                </a>
                <a href="<?= base_url('admin/konten/update/',$aa['foto']); ?>"></a>
                <button
                    type="button"
                    class="btn btn-warning"
                    data-toggle="modal"
                    data-target="#exampleModal<?=$aa['id_konten']; ?>">
                    <i class="fa fa-edit">
                        Edit</i>
                </button>

                <!-- Modal -->
                <div
                    class="modal fade"
                    id="exampleModal<?=$aa['id_konten']; ?>"
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
                                <form
                                    method="post"
                                    action="<?= base_url('admin/konten/update') ?>"
                                    enctype='multipart/form-data'>
                                    <input type="hidden" name="foto_hidden" value="<?=$aa['foto']; ?>">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Kategori Konten</label>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="judul"
                                            value="<?= $aa['judul']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <select name="id_kategori" class="form-control">
                                            <?php foreach($kategori as $value){ ?>
                                            <option
                                                <?php if($value['id_kategori'] == $aa ['id_kategori']){ echo"selected";} ?>
                                                value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="keterangan" class="form-control">
                                            <?= $aa['keterangan']; ?>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="file"
                                            class="form-control"
                                            name="foto"
                                            accept="image/png, image/jpg, image/jpeg">
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
            </div>
        </td>
    </tr>
    <?php }?>
</tbody>
</table>
<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/gba6rzvep53aknb0yzkcb9n6w5obo0gj9w4w890vgdfxkftj/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
<script src="https://cdn.tiny.cloud/1/gba6rzvep53aknb0yzkcb9n6w5obo0gj9w4w890vgdfxkftj/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
