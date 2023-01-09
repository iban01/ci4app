<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Ubah Playlist</h2>
<?= csrf_field(); ?>
<form action="/playlist/ubah/<?= $playlist['ID']; ?>" method="post">
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Playlist</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ; ?>" id="nama" placeholder="Isi disini" name="nama" autofocus value="<?= $playlist['nama']; ?>">
      <div class="invalid-feedback">
        <?= $validation->getError('nama'); ?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sampul" placeholder="Taruh gambar" name="sampul" value="<?= $playlist['sampul']; ?>">
    </div>
  </div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ubah Playlist</button>
    </div>
  </div>
</form>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>