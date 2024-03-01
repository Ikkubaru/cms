<div id="hilang">
    <?= $this->session->flashdata('alert',TRUE);?>
</div>
<div class="col-md-12 mb-3">
<form method="post" action="<?= base_url('admin/caraousel/simpan') ?>" enctype='multipart/form-data'> 
<div class="mb-3">
    <label  class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul" placeholder="Judul" required>
  <div class="mb-3">
    <label  class="form-label">Pilih Foto</label>
    <input type="file" class="form-control" name="foto">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
<hr>
<?php foreach ($caraousel as $value){ ?>
  <div class="container" >
  <div class="col-md-8 mb-3" style="  display:grid; align-items:center; justify-content:center;">
    <div class="card" style="width: 100%; height:auto; max-width:18rem; border:1px solid black; padding:10px;">
        <img class="card-img-top" src="<?= base_url('assets/upload/carousel/'.$value['foto']) ?>" >
        <div class="card-body">
            <h5 class="card-title"><?= $value['judul'] ?></h5>
            <a href="<?= base_url('admin/caraousel/delete/'.$value['foto']); ?>">
                    <button
                        class="btn btn-danger"
                        onclick="return confirm('Yakin Ingin Menghapus?')">
                        <i class="fa fa-trash">
                            Delete</i>
                    </button>
                </a>
        </div>
        <hr>
    </div>
</div>
  </div>

<?php }?>