<?= $this->extend("layout/templates") ?>

<?= $this->section('content') ?>

<div class="container">
    <div  class="row ">
        <div class="col-8">
            <h2 class="my-3 ">Form Tambah Data Komik</h2>
            <form action="/komik/save" method="post">
                <?= csrf_field() ?>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" name="judul">
                </div>
            </div>
            <div class="row mb-3">
                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="penulis" name="penulis">
                </div>
            </div>
            <div class="row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
            </div>
            <div class="row mb-3">
                <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="sampul" name="sampul">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>