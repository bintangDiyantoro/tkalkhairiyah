<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<h1 class="text-center"><?= $galeri[0]["detail"] ?></h1>
<div class="row d-flex justify-content-evenly py-3">
    <?php foreach ($galeri as $g) : ?>
        <img src="http://localhost/<?= $g["file"] ?>" class="img-thumbnail my-2" data-img="http://localhost/<?= $g["file"] ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $g["id"] ?>" alt="...">
    <?php endforeach; ?>
</div>
<div class="row my-3">
    <div class="col d-flex justify-content-center">
        <a href="<?= base_url('galeri') ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>

<!------------------- Modal -------------------->
<?php foreach ($galeri as $g) : ?>
    <div class="modal fade" id="staticBackdrop<?= $g["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content d-flex justify-content-center" style="height:600px;width: auto;">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                <img src="http://localhost/<?= $g["file"] ?>" class="rounded" style="display: block;max-height: 100%;max-width: 100%;" alt="..." data-bs-dismiss="modal">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $this->endSection() ?>