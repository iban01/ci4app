<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h1 class="mt-2">Daftar Playlist</h1>
        <?php if(session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
              <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif; ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Sampul</th>
              <th scope="col">Nama</th>
              <th scope="col">Daftar lagu</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach($playlist as $p) : ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><img src="/img/<?= $p['SAMPUL']; ?>" alt="" class="sampul"></td>
                <td><?= $p['NAMA']; ?></td>
                <td>
                  <a href="/lagu/index" class="btn btn-success">Click here!</a>
                </td>
                <td>
                  <a href="/playlist/ubah/<?= $p['ID']; ?>" class="btn btn-warning">Edit</a>
                  <form action="/playlist/<?= $p['ID']; ?>" method="post" class="d-inline">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                  </form>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <a href="/playlist/tambah" class="btn btn-primary mb-3">Add New</a>
        </div>
      </div>
</div>
<?= $this->endSection(); ?>