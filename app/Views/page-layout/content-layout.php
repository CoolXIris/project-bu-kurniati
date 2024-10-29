<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <title>
      Halaman Terkini
   </title>
   <script src="https://cdn.tailwindcss.com">
   </script>
   <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?= base_url('css/page/home.css') ?>" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
   <style>
      body {
         font-family: 'Roboto', sans-serif;
      }
   </style>
   <script>
      function toggleContent(id) {
         var content = document.getElementById(id);
         var icon = document.getElementById("toggleIcon-" + id);
         if (content.classList.contains("hidden")) {
            content.classList.remove("hidden");
            icon.classList.remove("fa-chevron-down");
            icon.classList.add("fa-chevron-up");
         } else {
            content.classList.add("hidden");
            icon.classList.remove("fa-chevron-up");
            icon.classList.add("fa-chevron-down");
         }
      }
   </script>
</head>

<body class="bg-gray-900 text-white">
   <?= $this->include('page-layout/navbar') ?>
   <?= $this->renderSection('content') ?>
   <?= $this->include('page-layout/share') ?>
   <?= $this->include('page-layout/reaction') ?>
   <?= $this->include('page-layout/comment') ?>
   <?= $this->include('page-layout/footer') ?>

   <!-- Jquery dan Bootstrap JS -->
   <script src="<?= base_url('js/jquery.min.js') ?>"></script>
   <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>