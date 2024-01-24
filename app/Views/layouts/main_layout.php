<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Tailwind Css</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png') ?>" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <?= $this->include('layouts/header_site') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('layouts/footer_site') ?>




</body>
</html>