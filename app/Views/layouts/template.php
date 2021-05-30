<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?= $description ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/img/logotk.png">
    <link rel="stylesheet" href="<?= base_url() . '/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . '/css/style.css' ?>">
    <title>TK Islam Al-Khairiyah | <?= $title ?></title>
</head>

<body>
    <?= $this->include('layouts/navbar') ?>
    <div class="container main-content">
        <?= $this->renderSection('content') ?>
    </div>
    <div class="myfooter">
        <div class="row">
            <div class="col-sm-3 footer-col">
                <div>
                    <h4>Sitemap:</h4>
                    <ul>
                        <li><a href="<?= base_url() ?>">Halaman Utama</a></li>
                        <li><a href="<?= base_url('galeri') ?>">Galeri Kegiatan</a></li>
                        <li><a href="<?= base_url('profil') ?>">Profil</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 footer-col">
                <div>
                    <h4>Visi:</h4>
                    <ul>
                        <li>
                            Mewujudkan generasi Muslim yang berakhlaq mulia, mandiri, cerdas, dan kreatif
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-3 footer-col">
                <div>
                    <h4>Misi:</h4>
                    <ul>
                        <li>Membiasakan perilaku islami dalam kehidupan sehari-hari</li>
                        <li> Mengembangkan kemandirian anak melalui kegiatan live skill</li>
                        <li> Melatih dan mengembangkan kecerdasan anak dalam berfikir dan berucap</li>
                        <li> Menyelenggarakan proses pembelajaran yang kreatif dan menyenangkan</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 footer-col">
                <div>
                    <h4>Tujuan:</h4>
                    <ul>
                        <li>Penanaman Aqidah dan Akhlaq Mulia</li>
                        <li>Mempersiapkan anak memasuki pendidikan dasar yaitu mengacu kepada kematangan emosional, sosial, penguasaan motorik, bahasa, pengenalan berhitung</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center py-4">
            <small class="text-center">
                Copyright &#169; 2021 TK Islam Al-Khairiyah Banyuwangi
            </small>
        </div>
    </div>
    <script src="<?= base_url() . '/js/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?= base_url() . '/js/script.js' ?>"></script>
</body>

</html>