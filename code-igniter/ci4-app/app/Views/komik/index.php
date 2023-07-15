<?= $this->extend("layout/templates") ?>

<?= $this->section('content') ?>

<div class="container">
    <h1>Daftar Table</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Sampul</th>
          <th scope="col">Judul</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($komik as $k) {?>
            <tr>
              <th scope="row"><?= $k["id"] ?></th>
              <td ><img class="sampul" src="/img/<?= $k["sampul"] ?>"></td>
              <td><?= $k["judul"] ?></td>
              <td>
                <a href="/komik/<?= $k["slug"] ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
</div>

<?= $this->endSection() ?>