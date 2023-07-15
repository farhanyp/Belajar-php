
<?= $this->extend('layout/templates') ?>

<?= $this->section('content') ?>

<ul>
    <?php foreach($alamat as $a) {?>
        <li>
            <?= $a ?>
        </li>
    <?php } ?>
</ul>

<?= $this->endSection('content') ?>
