<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Tambah Playlist</h2>
<?= csrf_field(); ?>
<form action="/playlist/simpan" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Playlist</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ; ?>" id="nama" placeholder="Isi disini" name="nama" autofocus value="<?= old('nama'); ?>">
      <div class="invalid-feedback">
        <?= $validation->getError('nama'); ?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
    <div class="col-sm-2">
      <img src="/img/default.jpg" class="img-thumbnail img-preview"> 
    </div>
    <div class="col-sm-8">
    <div class="custom-file">
      <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : '' ; ?>" id="sampul" name="sampul" onchange="previewImg()">
      <div class="invalid-feedback">
        <?= $validation->getError('sampul'); ?>
      </div>
      <label class="custom-file-label" for="sampul">Pilih Gambar</label>
    </div>
    </div>
  </div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Tambah Playlist</button>
    </div>
  </div>
</form>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>