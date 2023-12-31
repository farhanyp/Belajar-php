<?= $this->extend("layout/templates") ?>

<?= $this->section('content') ?>

<div class="container">
    <div  class="row ">
        <div class="col-8">
            <h2 class="my-3 ">Form Tambah Data Komik</h2>
            <form action="/komik/save" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control 
                        <?php if($validation) {?>
                            <?= ($validation->hasError('judul')) ? "is-invalid" : "" ?>
                        <?php } ?>" id="judul" name="judul" value= <?= old("judul") ?>>
                    <div class="invalid-feedback">
                        <?php if($validation) {?>
                            <?= $validation->getError('judul') ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control 
                        <?php if($validation) {?>
                            <?= ($validation->hasError('penulis')) ? "is-invalid" : "" ?>
                        <?php } ?>" id="penulis" name="penulis" value= <?= old("penulis") ?>>
                    <div class="invalid-feedback">
                        <?php if($validation) {?>
                            <?= $validation->getError('penulis') ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control 
                        <?php if($validation) {?>
                            <?= ($validation->hasError('penerbit')) ? "is-invalid" : "" ?>
                        <?php } ?>" id="penerbit" name="penerbit" value= <?= old("penerbit") ?>>
                    <div class="invalid-feedback">
                        <?php if($validation) {?>
                            <?= $validation->getError('penerbit') ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-2">
                    <img src="/img/default.jpg" class="img-thumbnail img-preview">
                </div>
                <div class="col-sm-8">
                    <div class="mb-3">
                        <input class="form-control
                        <?php if($validation) {?>
                            <?= ($validation->hasError('sampul')) ? "is-invalid" : "" ?>
                        <?php } ?>" type="file" id="sampul" name="sampul" onchange="previewImg()">
                        <div class="invalid-feedback">
                        <?php if($validation) {?>
                            <?= $validation->getError('sampul') ?>
                        <?php } ?>
                    </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>