<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h1 class="mt-2">Daftar Lagu</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Penyanyi</th>
      <th scope="col">Tahun Rilis</th>
      <th scope="col">Link Lagu</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
  <?php 
  foreach($lagu as $l) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $l['JUDUL']; ?></td>
      <td><?= $l['PENYANYI']; ?></td>
      <td><?= $l['TAHUN_RILIS']; ?></td>
      <td><?= $l['LINK LAGU']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
</div>
</div>
<?= $this->endSection(); ?>