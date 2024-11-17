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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script>
      $(document).ready(function() {
         $("#feedbackForm").on("submit", function(e) {
            e.preventDefault(); // Mencegah refresh halaman

            // Ambil data form
            const komentar = $("textarea[name='komentar']").val();
            const nama = $("input[name='nama']").val() || "Anonim";
            const email = $("input[name='email']").val();
            const situs = $("input[name='situs']").val();

            // Validasi sederhana sebelum mengirim data
            if (!komentar.trim()) {
               alert("Komentar tidak boleh kosong!");
               return;
            }

            // Kirim data dengan AJAX
            $.ajax({
               url: "<?= site_url('feedback/send'); ?>", // Endpoint ke controller
               method: "POST",
               data: {
                  komentar: komentar,
                  nama: nama,
                  email: email,
                  situs: situs
               },
               success: function(response) {
                  if (response.status === "success") {
                     alert("Komentar berhasil disimpan!"); // Notifikasi berhasil
                     $("#feedbackForm")[0].reset(); // Reset form setelah berhasil
                  } else {
                     alert("Gagal menyimpan komentar: " + response.message); // Notifikasi jika gagal
                  }
               },
               error: function(xhr, status, error) {
                  alert("Terjadi kesalahan saat mengirim komentar: " + error); // Notifikasi error
               }
            });
         });
      });
   </script>

   <script>
      function handleClick(type) {
         fetch('/reaction', {
               method: 'POST',
               headers: {
                  'Content-Type': 'application/json',
               },
               body: JSON.stringify({
                  reaction_type: type
               })
            })
            .then(response => response.json())
            .then(data => {
               if (data.status === 'success') {
                  alert('Terima kasih atas reaksi Anda!');
               } else {
                  alert('Terjadi kesalahan: ' + data.message);
               }
            })
            .catch(error => {
               alert('Terjadi kesalahan, coba lagi.');
               console.error(error);
            });
      }
   </script>

</head>

<body class="bg-gray-900 text-white">
   <?= $this->include('page-layout/navbar') ?>
   <?= $this->renderSection('content') ?>
   <?= $this->include('page-layout/widget') ?>
   <?= $this->include('page-layout/share') ?>
   <?= $this->include('page-layout/reaction') ?>
   <?= $this->include('page-layout/comment') ?>
   <?= $this->include('page-layout/footer') ?>

   <!-- Jquery dan Bootstrap JS -->
   <script src="<?= base_url('js/jquery.min.js') ?>"></script>
   <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>