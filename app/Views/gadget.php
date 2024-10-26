<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Glimpse | Review Gadget, Laptop, News Site</title>
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/page/home.css') ?>" rel="stylesheet">
</head>
<body>

    <!-- hero section -->
    <div class="hero-upper">
        <h2>Gadget Glimpse</h2><br>
        <p style="font-size: small;">Review and News Around Technology</p>
    </div>

    <!-- Navbar Section -->
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid" style="justify-content: center;">
        <a class="navbar-brand" href="<?= base_url('news')?>">News</a>
        <a class="navbar-brand" href="<?= base_url('review')?>">Review</a>
        <a class="navbar-brand active" href="<?= base_url('gadget')?>">Gadget</a>
        <a class="navbar-brand" href="<?= base_url('laptop')?>">Laptop</a>
        <li class="nav-item dropdown" style="margin-bottom:18px;">
            <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="<?= base_url('rekomendasi') ?>">Rekomendasi</a></li>
                <li><a class="dropdown-item" href="<?= base_url('speedtest')?>">Speed Test</a></li>
                <li><a class="dropdown-item" href="<?= base_url('tips')?>">Tips</a></li>
            </ul>
        </li>
    </div>
    </nav>

    <!-- About Section -->
    <div class="about">
        <div class="text-about">
            <p style="font-size: 13px;color:white">GadgetGlimpse > <span style="color: #ff184e;">Gadget</span></p>
            <h2 style="color: white; margin-bottom:25px">Gadget</h2>
            <p style="color: white;">Informasi gadget terbaru baik itu smartphone, kamera, wearable, dan lainnya hanya di GadgetGlimpse</p>
        </div>
        <div class="image-about">
            <img src="<?= base_url('css/img/gadget.jpg')?>" class="rounded mx-auto d-block" alt="news">
        </div>
    </div>

    <!-- Content Section -->
    <h3 style="margin-left: 50px;margin-top:40px;color:white;border-bottom:2px solid white;box-shadow: 0 3px 0 0 red;"> Latest News </h3>
    <div class="news-container">
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/MediaTek-Dimensity-9400.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">ZTE BLADE A35</span>
            </div>
            <a href="#" class="head_line">Review ZTE Blade A35: Nggak Sampai Sejuta, Bawa Gimmick Menarik</a>
            <p class="description">Apa saja yang bisa ditawarkan lewat ZTE Blade A35? Berikut ulasan selengkapnya!</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 8.6 out of 10
            </div>
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/ZEISS-Multifocal.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">VIVO</span>
            </div>
            <a href="#" class="head_line">Mengenal Fitur ZEISS Multifocal Portrait di vivo V40, Mereplikasi Kamera Multi-lensa</a>
            <p class="description">ZEISS Multifocal Portrait di vivo V40 memungkinkan pengambilan foto portrait rentang 24mm...</p>
            <p class="author"><bold>Prasetyo Herfianto</bold> | 9 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Samsung-Galaxy-A16.jpeg')?>" alt="News Image">
                <span class="badge-bottom-left">GALAXY A16 5G</span>
            </div>
            <a href="#" class="head_line">Samsung Galaxy A16 5G Siap Meramaikan Pasar Mid-Range Tanah Air</a>
            <p class="description">Samsung bakal meluncurkan Galaxy A16 5G sebagai ponsel mid-range harga terjangkau di...</p>
            <p class="author">Christopher Louis | 8 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Smart-Ring_Apple.jpeg')?>" alt="News Image">
                <span class="badge-bottom-left">APPLE</span>
            </div>
            <a href="#" class="head_line">Apple Dikabarkan Batal Kembangkan Smart Ring. Ini Alasannya</a>
            <p class="description">Pasar smart ring kini baru didominasi sejumlah vendor saja, seperti Oura dan ...</p>
            <p class="author">Christopher Louis | 8 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Huawei-Mate-XT.jpeg')?>" alt="News Image">
                <span class="badge-bottom-left">HUAWEI</span>
            </div>
            <a href="#" class="head_line">Sebuah Perusahaan Sulap Huawei Mate XT Jadi Perangkat Mewah Rp52 Juta!</a>
            <p class="description">Caviar berhasil menyulap Huawei Mate XT dengan material yang jauh lebih mewah.</p>
            <p class="author">Christopher Louis | 8 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/vivo-X100-Pro.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">VIVO X100 PRO</span>
            </div>
            <a href="#" class="head_line">Review vivo X100 Pro: Hadir Belakangan, Kualitas Foto Jempolan</a>
            <p class="description">vivo X100 Pro bisa jadi pilihan utama untuk smartphone dengan kualitas foto...</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 8.6 out of 10
            </div>
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/realme-13-series.jpeg')?>" alt="News Image">
                <span class="badge-bottom-left">GADGET</span>
            </div>
            <a href="#" class="head_line">realme 13 Series 5G Hadir 17 Oktober, Jadi Official Gaming Phone Honor of Kings</a>
            <p class="description">Optimasi software dan hardware membuat realme 13 series 5G bisa jalankan game...</p>
            <p class="author">Christopher Louis | 7 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Kamera-TECNO-Spark-30C.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">KAMERA TECNO SPARK 30C</span>
            </div>
            <a href="#" class="head_line">Menjajal Kamera TECNO Spark 30C, Pakai Sensor Sony Terbaik di Kelasnya</a>
            <p class="description">Sensor Sony IMX582 terbukti membuat kamera TECNO Spark 30C bisa hasilkan gambar...</p>
            <p class="author">Prasetyo Herfianto | 7 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Bose-SoundLink-Home.jpeg')?>" alt="News Image">
                <span class="badge-bottom-left">BLUETOOTH SPEAKER</span>
            </div>
            <a href="#" class="head_line">Bose SoundLink Home, Wireless Speaker Premium dengan Kualitas Audio Imersif</a>
            <p class="description">Tanpa sertifikasi waterproof, Bose SoundLink Home lebih mengedepankan aspek desain dan kualitas</p>
            <p class="author">Christopher Louis | 6 October 2024</p>
            
        </div>

    <!-- Tambahkan card lain sesuai kebutuhan -->
    </div>
    <div class="pagination" style="justify-content: center;align-items:center;">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
