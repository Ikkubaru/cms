<div id="hilang">
    <?= $this->session->flashdata('alert',TRUE);?>
</div>
<form
    method="post"
    action="<?= base_url('admin/konfigurasi/update') ?>">
    <div class="form-group">
            <label class="form-label" style="float:left">Judul Website</label>
        <input
            type="text"
            class="form-control"
            name="judul_web"
            placeholder="Judul Website"
            value="<?= $konfig->judul_web ?>">
    </div>
    <div class="form-group">
        <label class="form-label" style="float:left">Profile</label>
        <input
            type="text"
            class="form-control"
            name="profil_web"
            placeholder="Profile"
            value="<?= $konfig->profil_web ?>">
    </div>
    <div class="form-group">
        <label class="form-label" style="float:left">Instagram</label>
        <input
            type="text"
            class="form-control"
            name="instagram"
            placeholder="Instagram"
            value="<?= $konfig->instagram ?>">
    </div>
    <div class="form-group">
        <label class="form-label" style="float:left">Facebook</label>
        <input
            type="text"
            class="form-control"
            name="facebook"
            placeholder="Facebook"
            value="<?= $konfig->facebook ?>">
    </div>
    <div class="form-group">
        <label class="form-label" style="float:left">Email</label>
        <input
            type="email"
            class="form-control"
            name="email"
            placeholder="Email"
            value="<?= $konfig->email ?>">
    </div>
    <div class="form-group">
        <label class="form-label" style="float:left">Alamat</label>
        <input
            type="text"
            class="form-control"
            name="alamat"
            placeholder="Alamat"
            value="<?= $konfig->alamat ?>">
    </div>
    <div class="form-group">
        <label class="form-label" style="float:left">WhatsApp</label>
        <input
            type="text"
            class="form-control"
            name="no_wa"
            placeholder="WhatsAspp"
            value="<?= $konfig->no_wa ?>">
    </div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>