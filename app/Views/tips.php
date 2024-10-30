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
            <!-- Navbar Brand: News -->
            <a class="navbar-brand" href="<?= base_url('news') ?>">
                News
            </a>
            <div class="news-preview">
                <!-- Mini Card 1: Chipset Mediatek Dimensity -->
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/MediaTek-Dimensity-9400.jpg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">CHIPSET</span>
                    </div>
                    <a href="#" class="headline-mini">Chip Flagship Mediatek Dimensity 9400 Maksimalkan Performa & Efisiensi...</a>
                    <p class="description-mini">MediaTek Dimensity 9400 siap debut di flagship terbaru rilisan akhir 2024...</p>
                    <p class="author-mini">Prasetyo Herfianto | 10 October 2024</p>
                </div>
                <!-- Mini Card 2: Qualcomm XGS-PON WiFi 7 -->
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/XGS-PON-WiFi-7.jpeg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">QUALCOMM</span>
                    </div>
                    <a href="#" class="headline-mini">VNPT & Qualcomm Luncurkan XGS-PON WiFi 7, Kecepatan Internet Sampai 22 Gbps...</a>
                    <p class="description-mini">Vietnam Post and Telecommunications Group (VNPT) baru saja meluncurkan layanan XGS-PON...</p>
                    <p class="author-mini">Christopher Louis | 10 October 2024</p>
                </div>
                <!-- Mini Card 3: Aplikasi Fintech Lokadata -->
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/mobile-banking-ilustrasi.jpg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">APLIKASI FINTECH</span>
                    </div>
                    <a href="#" class="headline-mini">Laporan Lokadata: 73 Persen Gen Z Beralih Gunakan Bank Digital...</a>
                    <p class="description-mini">Jakarta, GadgetGlimpse - Lokadata.id, perusahaan riset ini mengungkapkan laporannya...</p>
                    <p class="author-mini">Christopher Louis | 9 October 2024</p>
                </div>
                <!-- Mini Card 4: TikTok Lawsuit -->
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/Tiktok.jpeg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">APLIKASI TIKTOK</span>
                    </div>
                    <a href="#" class="headline-mini">Tiktok Dituntut Jaksa Agung AS, Dianggap Tak Perhatikan Kesehatan Mental...</a>
                    <p class="description-mini">Baru-baru ini, sebanyak 14 jaksa agung dari negara bagian Amerika Serikat telah...</p>
                    <p class="author-mini">Christopher Louis | 9 October 2024</p>
                </div>
            </div>

            <!-- Navbar Brand: Review -->
            <a class="navbar-brand" href="<?= base_url('review') ?>">
                Review
            </a>
            <div class="news-preview">
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/vivo-X100-Pro.jpg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">VIVO X100 PRO</span>
                    </div>
                    <a href="#" class="headline-mini">Review vivo X100 Pro: Hadir Belakangan, Kualitas Foto Jempolan</a>
                    <p class="description-mini">vivo X100 Pro bisa jadi pilihan utama untuk smartphone dengan kualitas foto...</p>
                    <div class="rating-mini">
                        ⭐⭐⭐⭐⭐ | 8.6 out of 10
                    </div>
                </div>
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/OPPO-Reno12F-5G.jpg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">OPPO RENO12F 5G</span>
                    </div>
                    <a href="#" class="headline-mini">Review OPPO Reno 12F 5G: Smartphone Stylish Tahan Banting</a>
                    <p class="description-mini">Cantik dan tahan banting. Berikut review OPPO Reno 12F 5G selengkapnya.</p>
                    <div class="rating-mini">
                        ⭐⭐⭐⭐⭐ | 9 out of 10
                    </div>
                </div>
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/Samsung-Galaxy-Watch7.jpg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">SAMSUNG GALAXY WATCH 7</span>
                    </div>
                    <a href="#" class="headline-mini">Review Samsung Galaxy Watch 7: Makin Pintar dengan AI</a>
                    <p class="description-mini">Samsung Galaxy Watch 7 adalah smartwatch terbaru yang fungsional, elegan, dan kaya...</p>
                    <div class="rating-mini">
                        ⭐⭐⭐⭐⭐ | 7.8 out of 10
                    </div>
                </div>
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/realme-13-Pro.jpg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">REALME 13 PRO</span>
                    </div>
                    <a href="#" class="headline-mini">Review realme 13 Pro+ 5G: Ketika Algoritma AI & Sensor Sony LYTIA Bersinergi</a>
                    <p class="description-mini">Sejauh apa peningkatannya dibandingkan generasi sebelumnya? Berikut ulasan realme 13 Pro+ 5G</p>
                    <div class="rating-mini">
                        ⭐⭐⭐⭐⭐ | 8.7 out of 10
                    </div>
                </div>
            </div>

            <!-- Navbar Brand: Gadget -->
            <a class="navbar-brand" href="<?= base_url('gadget') ?>">
                Gadget
            </a>
            <div class="news-preview">
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/MediaTek-Dimensity-9400.jpg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">ZTE BLADE A35</span>
                    </div>
                    <a href="#" class="headline-mini">Review ZTE Blade A35: Nggak Sampai Sejuta, Bawa Gimmick Menarik</a>
                    <p class="description-mini">Apa saja yang bisa ditawarkan lewat ZTE Blade A35? Berikut ulasan selengkapnya!</p>
                    <div class="rating-mini">
                        ⭐⭐⭐⭐⭐ | 8.6 out of 10
                    </div>
                </div>
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/ZEISS-Multifocal.jpg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">VIVO</span>
                    </div>
                    <a href="#" class="headline-mini">Mengenal Fitur ZEISS Multifocal Portrait di vivo V40, Mereplikasi Kamera Multi-lensa</a>
                    <p class="description-mini">ZEISS Multifocal Portrait di vivo V40 memungkinkan pengambilan foto portrait rentang 24mm...</p>
                    <p class="author-mini">
                        <bold>Prasetyo Herfianto</bold> | 9 October 2024
                    </p>
                </div>
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/Samsung-Galaxy-A16.jpeg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">GALAXY A16 5G</span>
                    </div>
                    <a href="#" class="headline-mini">Samsung Galaxy A16 5G Siap Meramaikan Pasar Mid-Range Tanah Air</a>
                    <p class="description-mini">Samsung bakal meluncurkan Galaxy A16 5G sebagai ponsel mid-range harga terjangkau di...</p>
                    <p class="author-mini">Christopher Louis | 8 October 2024</p>
                </div>
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/Smart-Ring_Apple.jpeg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">APPLE</span>
                    </div>
                    <a href="#" class="headline-mini">Apple Dikabarkan Batal Kembangkan Smart Ring. Ini Alasannya</a>
                    <p class="description-mini">Pasar smart ring kini baru didominasi sejumlah vendor saja, seperti Oura dan ...</p>
                    <p class="author-mini">Christopher Louis | 8 October 2024</p>
                </div>
            </div>

            <!-- Navbar Brand: Laptop -->
            <a class="navbar-brand" href="<?= base_url('laptop') ?>">
                Laptop
            </a>
            <div class="news-preview">
                <div class="news-card-mini">
                    <div class="image-container-mini">
                        <img src="<?= base_url('css/img/Tiktok.jpeg') ?>" alt="News Image">
                        <span class="badge-bottom-left-mini">APLIKASI TIKTOK</span>
                    </div>
                    <a href="#" class="headline-mini">Tiktok Dituntut Jaksa Agung AS, Dianggap Tak Perhatikan Kesehatan Mental...</a>
                    <p class="description-mini">Baru-baru ini, sebanyak 14 jaksa agung dari negara bagian Amerika Serikat telah...</p>
                </div>
            </div>

            <!-- Dropdown Menu (without preview) -->
            <li class="nav-item dropdown" style="margin-bottom:18px;">
                <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="<?= base_url('rekomendasi') ?>">Rekomendasi</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('speedtest') ?>">Speed Test</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('tips') ?>">Tips</a></li>
                </ul>
            </li>
        </div>
    </nav>



    <!-- About Section -->
    <div class="about">
        <div class="text-about">
            <p style="font-size: 13px;color:white">GadgetGlimpse > <span style="color: #ff184e;">Tips</span></p>
            <h2 style="color: white; margin-bottom:25px">Tips</h2>
            <p style="color: white;">Tips dan trik (hacks) untuk meningkatkan fungsionalitas gawai kamu.</p>
        </div>
        <div class="image-about">
            <img src="<?= base_url('css/img/News.jpeg') ?>" class="rounded mx-auto d-block" alt="news">
        </div>
        ';/L0.L
    </div>

    <!-- Content Section -->
    <h3 style="margin-left: 50px;margin-top:40px;color:white;"><span style="color: #ff184e;">/</span> Latest Tips News <span style="color: #ff184e;">/</span></h3>
    <div class="news-container">
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/MediaTek-Dimensity-9400.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">PC GAMING</span>
            </div>
            <a href="#" class="head_line">Tips Rakit Pc Gaming 2024,Mudah Dan Simpel!</a>
            <p class="description">Hal Seperti Rakit PC Gaming Perlu Tips Yang Tepat Agar Tidak Salah...</p>
            <p class="author"><span style="font-style: bold;">Christoper luois</span> | 10 October 2024</p>
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/XGS-PON-WiFi-7.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">CARA MEMBERSIHKAN SMARTPHONE</span>
            </div>
            <a href="#" class="head_line">7 Cara Membersihkan Smartphone Dari Minyak Dan Debu,Aman Tanpa Resiko</a>
            <p class="description">Cara Membersihkan Smartphone Bisa Gizmo Friends Terapkan Secara Mudah...</p>
            <p class="author">
                <bold>Christopher Louis</bold> | 9 October 2024
            </p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/mobile-banking-ilustrasi.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">APPLE</span>
            </div>
            <a href="#" class="head_line">Tips Mengubah Tampilan Utama IOS 18 Di Iphone & IPAD Jadi Lebih Segar</a>
            <p class="description">IOS 18 & IPADOS 18 Membawa Banyak Opsi Baru Untuk Kustomisasi Tampilan...</p>
            <p class="author">Christopher Louis | 08 October 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Tiktok.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">DATA PRIBADI</span>
            </div>
            <a href="#" class="head_line">Cara Menjaga Data Dan Privasi Smartphone Di 2024</a>
            <p class="description">Menjaga privasi smartphone telah menjadi bagian penting dari kehidupan...</p>
            <p class="author">Christopher Louis | 06 October 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/indosat-HiFi.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">BATTERY HEALTHY</span>
            </div>
            <a href="#" class="head_line">3 Cara Mengecek Kesehatan Baterai Laptop,Simpel Dan Mudah!</a>
            <p class="description">Menjaga Kesehatan Baterai Laptop Adalah Hal Penting Untuk Memastikan Performa Dan Daya...</p>
            <p class="author">Christopher Louis | 30 September 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Samsung-Galaxy-A16.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">GALAXY A16 5G</span>
            </div>
            <a href="#" class="head_line">Samsung Galaxy A16 5G Siap Meramaikan Pasar Mid-Range Tanah Air</a>
            <p class="description">Samsung bakal meluncurkan Galaxy A16 5G sebagai ponsel mid-range harga terjangkau di...</p>
            <p class="author">Christopher Louis | 8 October 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">ARSIP INSTAGRAM</span>
            </div>
            <a href="#" class="head_line">Cara Backup Archive Instagram Dengan Mudah Dan Aman </a>
            <p class="description">Berikut Tips Backup Archive Instagram Yang Bisa Gizmo Friends Terapkan Secara Mudah...</p>
            <p class="author">Redaksi | 25 September 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Asus-NUC.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">FAST CHARGING</span>
            </div>
            <a href="#" class="head_line"></a>
            <p class="description">Warna Lingkaran Hijau , Tosca , Dan Biru Pada Fast Charging Samsung,Apa Bedanya? ...</p>
            <p class="author">Christopher Louis | 8 October 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">Aksesoris Komputer</span>
            </div>
            <a href="#" class="head_line">Tips Memimlih Mechanical Keyboard,Ketahui Mana Yang Pas!</a>
            <p class="description">Selain Budget, Ada Sejumlah Tips Memilih Mechanical Keyboard Yang Penting Untuk Kamu...</p>
            <p class="author">Redaksi | 9 September 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">APPLE</span>
            </div>
            <a href="#" class="head_line">Sudah Rilis,Ini Cara Update IOS 18 Di Iphone Kamu!</a>
            <p class="description">Apple belum lama ini merilis sistem operasi terbarunya IOS...</p>
            <p class="author">Zihan fajrin | 19 September 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">GALAXY A06</span>
            </div>
            <a href="#" class="head_line">samsung knox vault digalaxy a06 bantu lindungi data saat diperbaiki</a>
            <p class="description">samsung belum lama ini merilis galaxy a06, yang dilengkapi dengan...</p>
            <p class="author">Zihan fajrin | 10 September 2024</p>

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