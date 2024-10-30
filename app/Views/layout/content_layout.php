<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Glimpse | Review Gadget, Laptop, News Site</title>
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/page/home.css') ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>

<body>
    <?= $this->include('layout/hero')?>
    <?= $this->include('layout/navbar')?>

    <?= $this->renderSection('content')?>

    <?= $this->include('layout/footer')?>

<!-- Jquery dan Bootstrap JS -->
<script>
    document.querySelector('.dropdown').addEventListener('mouseover', function() {
        let dropdown = new bootstrap.Dropdown(this.querySelector('.dropdown-toggle'));
        dropdown.show();
    });

    document.querySelector('.dropdown').addEventListener('mouseleave', function() {
        let dropdown = new bootstrap.Dropdown(this.querySelector('.dropdown-toggle'));
        dropdown.hide();
    });
</script>

<script src="<?=base_url('js/jquery.min.js') ?>"></script>
<script src="<?=base_url('js/bootstrap.min.js') ?>"></script>
</body>