<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">Daftar User</h1>
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan keyword pencarian" name="keyword">
                <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 + (2 * ($currentPage-1)); ?>
            <?php foreach($user as $u) : ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $u['username']; ?></td>
                <td><?= $u['email']; ?></td>
                <td>
                  <a href="" class="btn btn-success">Click here!</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <?= $pager->links('user','user_pagination'); ?>
        </div>
      </div>
</div>
<?= $this->endSection(); ?>