<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<h1>Selamat Datang di laman TK Islam Al-Khairiyah Banyuwangi</h1>
<div class="row my-5">
    <div class="col-sm-7 mx-4 my-2">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('img/tk1.jpg') ?>" class="d-block w-100 rounded" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('img/tk2.jpg') ?>" class="d-block w-100 rounded" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('img/tk3.jpg') ?>" class="d-block w-100 rounded" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="desc-col mx-3">TK Islam Al-Khairiyah adalah lembaga pendidikan formal pra-sekolah bagi anak usia dini di Kabupaten Banyuwangi yang mengutamakan nilai-nilai agama Islam dalam kehidupan sehari-hari. TK Islam Al-Khairiyah menerapkan metode belajar sambil bermain sebagai bentuk rangsangan pendidikan untuk membantu pertumbuhan jasmani dan rohani sehingga lulusan TK Islam Al-Khairiyah Banyuwangi menjadi anak yang santun, mandiri, aktif dan kreatif menuju tingkat siap belajar di Sekolah Dasar.</div>
</div>
<?= $this->endSection() ?>