<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?= $description ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() . '/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . '/css/style.css' ?>">
    <title><?= $title ?></title>
</head>

<body>
    <?= $this->include('layouts/navbar') ?>
    <div class="container mt-5">
        <?= $this->renderSection('content') ?>
    </div>
    <script src="<?= base_url() . '/js/bootstrap.bundle.min.js' ?>"></script>
</body>

</html>