<?= $this->extend("layout/templates") ?>

<?= $this->section('content') ?>

<div class="container">
    <h1>Detail Page</h1>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $komik["sampul"] ?>" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $komik["judul"] ?></h5>
        <p class="card-text"><b>Penulis: </b><?= $komik["penulis"] ?></p>
        <p class="card-text"><small class="text-body-secondary"><b>Penerbit: </b><?= $komik["penerbit"] ?></small></p>

        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
        <br/>
        <br/>
        <a href="/komik">Kembali ke daftar komik</a>
      </div>
    </div>
  </div>
</div>
</div>

<?= $this->endSection() ?>