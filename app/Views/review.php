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
        <a class="navbar-brand active" href="<?= base_url('review')?>">Review</a>
        <a class="navbar-brand" href="<?= base_url('gadget')?>">Gadget</a>
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
            <p style="font-size: 13px;color:white">GadgetGlimpse > <span style="color: #ff184e;">Review</span></p>
            <h2 style="color: white; margin-bottom:25px">Review</h2>
            <p style="color: white;">GadgetGlimpse adalah media gadget & teknologi yang menyajikan review produk gadget terlengkap. Mulai dari smartphone, laptop, kamera, wearable devices (jam pintar dll).</p>
            <p style="color: white;">Review menjadi kanal unggulan dari GadgetGlimpse, yang mengulas produk secara mendalam dari berbagai aspek. Seperti desain, layar, kamera, fitur, performa, baterai, dan sebagainya. Termasuk spesifikasi, harga, kelebihan, dan kekurangan dari setiap produk. Sehingga pembaca bisa mendapatkan gambaran yang lebih utuh sebelum memutuskan untuk membeli gadget yang diinginkan.</p>
        </div>
        <div class="image-about">
            <img src="<?= base_url('css/img/review.jpeg')?>" class="rounded mx-auto d-block" alt="news">
        </div>
    </div>

    <!-- Content Section -->
    <h3 style="margin-left: 50px;margin-top:40px;color:white;"><span style="color: #0ba3e3;">/</span> Latest Reviews <span style="color: #0ba3e3;">/</span></h3>
    <div class="news-container">
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
                <img src="<?= base_url('css/img/OPPO-Reno12F-5G.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">OPPO RENO12F 5G</span>
            </div>
            <a href="#" class="head_line">Review OPPO Reno 12F 5G: Smartphone Stylish Tahan Banting</a>
            <p class="description">Cantik dan tahan banting. Berikut review OPPO Reno 12F 5G selengkapnya.</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 9 out of 10
            </div>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Samsung-Galaxy-Watch7.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">SAMSUNG GALAXT WATCH 7</span>
            </div>
            <a href="#" class="head_line">Review Samsung Galaxy Watch 7: Makin Pintar dengan AI</a>
            <p class="description">Samsung Galaxy Watch 7 adalah smartwatch terbaru yang fungsional, elegan, dan kaya...</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 7.8 out of 10
            </div>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/realme-13-Pro.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">REALME 13 PRO</span>
            </div>
            <a href="#" class="head_line">Review realme 13 Pro+ 5G: Ketika Algoritma AI & Sensor Sony LYTIA Bersinergi</a>
            <p class="description">Sejauh apa peningkatannya dibandingkan generasi sebelumnya? Berikut ulasan realme 13 Pro+ 5G</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 8.7 out of 10
            </div>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Lenovo-Yoga-Book-9i.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">LENOVO YOGA BOOK 9i</span>
            </div>
            <a href="#" class="head_line">Review Lenovo Yoga Book 9i (2024): Laptop Dua Layar Untuk Produktivitas Maksimal</a>
            <p class="description">Apa sih benefit punya dua layar penuh? Berikut ulasan Lenovo Yoga Book...</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 8.8 out of 10
            </div>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Apple-iPhone-13.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">IPHONE 13</span>
            </div>
            <a href="#" class="head_line">Review iPhone 13 di Tahun 2024: Pilihan Pas dengan Harga Makin Terjangkau</a>
            <p class="description">Harga sudah murah, jadi makin layak beli? Berikut ulasan review iPhone 13 di...</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 8.5 out of 10
            </div>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/iPad-Air-M2-13.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">IPAD AIR M2 13</span>
            </div>
            <a href="#" class="head_line">Review iPad Air M2 13 inci: Layar Lega, Bisa Gantikan Laptop?</a>
            <p class="description">Lebih besar, lebih pas untuk produktivitas? Berikut review iPad Air M2 13...</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 8.6 out of 10
            </div>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/realme-Buds-T110.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">REALME BUDS T110</span>
            </div>
            <a href="#" class="head_line">Review realme Buds T110: TWS Rp200 Ribuan Berkualitas dengan Gaming Mode</a>
            <p class="description">Murah tapi berkualitas? Berikut review realme Buds T110!</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 8.6 out of 10
            </div>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/WD-My-Passport-6TB.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">WD MY PASSPORT 6TB</span>
            </div>
            <a href="#" class="head_line">Review WD My Passport 6TB: Solusi Penyimpanan Lega Lebih Terjangkau</a>
            <p class="description">Solusi memori besar harga terjangkau? Berikut review WD My Passport 6TB selengkapnya!</p>
            <div class="rating">
            ⭐⭐⭐⭐⭐ | 8.3 out of 10
            </div>
            
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
