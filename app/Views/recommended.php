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
            <a class="navbar-brand" href="<?= base_url('news')?>">
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
            <a class="navbar-brand" href="<?= base_url('review')?>">
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
                            <img src="<?= base_url('css/img/OPPO-Reno12F-5G.jpg')?>" alt="News Image">
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
            <a class="navbar-brand" href="<?= base_url('gadget')?>">
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
                    <img src="<?= base_url('css/img/ZEISS-Multifocal.jpg')?>" alt="News Image">
                    <span class="badge-bottom-left-mini">VIVO</span>
                </div>
                <a href="#" class="headline-mini">Mengenal Fitur ZEISS Multifocal Portrait di vivo V40, Mereplikasi Kamera Multi-lensa</a>
                <p class="description-mini">ZEISS Multifocal Portrait di vivo V40 memungkinkan pengambilan foto portrait rentang 24mm...</p>
                <p class="author-mini"><bold>Prasetyo Herfianto</bold> | 9 October 2024</p>
            </div>
            <div class="news-card-mini">
                <div class="image-container-mini">
                    <img src="<?= base_url('css/img/Samsung-Galaxy-A16.jpeg')?>" alt="News Image">
                    <span class="badge-bottom-left-mini">GALAXY A16 5G</span>
                </div>
                <a href="#" class="headline-mini">Samsung Galaxy A16 5G Siap Meramaikan Pasar Mid-Range Tanah Air</a>
                <p class="description-mini">Samsung bakal meluncurkan Galaxy A16 5G sebagai ponsel mid-range harga terjangkau di...</p>
                <p class="author-mini">Christopher Louis | 8 October 2024</p>
            </div>
            <div class="news-card-mini">
                <div class="image-container-mini">
                    <img src="<?= base_url('css/img/Smart-Ring_Apple.jpeg')?>" alt="News Image">
                    <span class="badge-bottom-left-mini">APPLE</span>
                </div>
                <a href="#" class="headline-mini">Apple Dikabarkan Batal Kembangkan Smart Ring. Ini Alasannya</a>
                <p class="description-mini">Pasar smart ring kini baru didominasi sejumlah vendor saja, seperti Oura dan ...</p>
                <p class="author-mini">Christopher Louis | 8 October 2024</p>
            </div>
            </div>

            <!-- Navbar Brand: Laptop -->
            <a class="navbar-brand" href="<?= base_url('laptop')?>">
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
                    <li><a class="dropdown-item active" href="<?= base_url('recommended') ?>">Rekomendasi</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('speedtest')?>">Speed Test</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('tips')?>">Tips</a></li>
                </ul>
            </li>
        </div>
    </nav>



    <!-- About Section -->
    <div class="about">
        <div class="text-about">
            <p style="font-size: 13px;color:white">GadgetGlimpse > <span style="color: #ff184e;">News</span></p>
            <h2 style="color: white; margin-bottom:25px">News</h2>
            <p style="color: white;">menyajikan ulasan berita terbaru yang komprehensif seputar teknologi informasi dan telekomunikasi, gadget, dan sebagainya.</p>
        </div>
        <div class="image-about">
            <img src="<?= base_url('css/img/News.jpeg')?>" class="rounded mx-auto d-block" alt="news">
        </div>
    </div>

    <!-- Content Section -->
    <h3 style="margin-left: 50px;margin-top:40px;color:white;"><span style="color: #ff184e;">/</span> Latest News <span style="color: #ff184e;">/</span></h3>
    <div class="news-container">
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/MediaTek-Dimensity-9400.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">CHIPSET</span>
            </div>
            <a href="#" class="head_line">Chip Flagship Mediatek Dimensity 9400 Maksimalkan Performa & Efisiensi, Siap Untuk Era AI Agentik</a>
            <p class="description">MediaTek Dimensity 9400 siap debut di flagship terbaru rilisan akhir 2024</p>
            <p class="author"><span style="font-style: bold;">Prasetyo Herfianto</span> | 10 October 2024</p>
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/XGS-PON-WiFi-7.jpeg')?>" alt="News Image">
                <span class="badge-bottom-left">QUALCOMM</span>
            </div>
            <a href="#" class="head_line">VNPT & Qualcomm Luncurkan XGS-PON WiFi 7, Kecepatan Internet Sampai 22 Gbps</a>
            <p class="description">Vietnam Post and Telecommunications Group (VNPT) baru saja meluncurkan layanan XGS-PON WiFi...</p>
            <p class="author"><bold>Christopher Louis</bold> | 10 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/mobile-banking-ilustrasi.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">APLIKASI FINTECH</span>
            </div>
            <a href="#" class="head_line">Laporan Lokadata: 73 Persen Gen Z Beralih Gunakan Bank Digital</a>
            <p class="description">Jakarta, GadgetGlimpse - Lokadata.id, perusahaan riset ini mengungkapkan laporannya yang menyebutkan 73...</p>
            <p class="author">Christopher Louis | 09 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Tiktok.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">APLIKASI TIKTOK</span>
            </div>
            <a href="#" class="head_line">Tiktok Dituntut Jaksa Agung AS, Dianggap Tak Perhatikan Kesehatan Mental Remaja</a>
            <p class="description">Baru-baru ini, sebanyak 14 jaksa agung dari negara bagian Amerika Serikat telah...</p>
            <p class="author">Christopher Louis | 9 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/indosat-HiFi.jpeg')?>" alt="News Image">
                <span class="badge-bottom-left">INDOSAT HIFI</span>
            </div>
            <a href="#" class="head_line">MNC Play Resmi Bermigrasi ke Indosat HiFi, Janjikan Kualitas Interner Lebih Prima</a>
            <p class="description">Indosat secara resmi mengumumkan transformasi brand layanan internet MNC Play menjadi Indosat...</p>
            <p class="author">Christopher Louis | 9 October 2024</p>
            
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
                <img src="<?= base_url('css/img/Synology-Solution.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">SOLUSI KEAMANAN DATA</span>
            </div>
            <a href="#" class="head_line">Solusi Enterprise Terbaru Synology, Integrasikan AI & Kamera Pengintai Berbasis Cloud</a>
            <p class="description">Synology integrasikan AI secara mendalam, termasuk untuk membuat ringkasan dokumen sampai membuat...</p>
            <p class="author">Christopher Louis | 8 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Asus-NUC.jpeg')?>" alt="News Image">
                <span class="badge-bottom-left">APPLE</span>
            </div>
            <a href="#" class="head_line">Apple Dikabarkan Batal Kembangkan Smart Ring. Ini Alasannya</a>
            <p class="description">Pasar smart ring kini baru didominasi sejumlah vendor saja, seperti Oura dan ...</p>
            <p class="author">Christopher Louis | 8 October 2024</p>
            
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg')?>" alt="News Image">
                <span class="badge-bottom-left">ASUS</span>
            </div>
            <a href="#" class="head_line">Kilas Balik 1 Tahun Asus Akuisisi NUC dari Intel</a>
            <p class="description">ASUS Nuc berhasil menjadi opsi utama dalam pasar mini PC.</p>
            <p class="author">Christopher Louis | 7 October 2024</p>
            
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


    <section id="footer" class="footer">
    <footer class="bg-gray-900 py-8">
            <div class="container mx-auto text-left px-4">
                <div class="flex flex-col items-start mb-4">
                    <div class="text-left">
                        <h1 class="text-2xl font-bold mb-1">GADGETGLIMPSE</h1>
                        <p class="text-sm">The Gadget &amp; Technology Universe</p>
                    </div>
                </div>
                <div class="border-t border-gray-700 pt-4">
                    <p class="text-sm mb-4">
                        © 2024 GadgetGlimpse by Kelompok 1. All Rights Reserved.
                    </p>
                    <div class="flex flex-wrap justify-start space-x-4 text-sm">
                        <a class="hover:underline" href="#">
                            Home
                        </a>
                        <span class="hidden sm:inline">
                            •
                        </span>
                        <a class="hover:underline" href="#">
                            Tentang GadgetGlimpse
                        </a>
                        <span class="hidden sm:inline">
                            •
                        </span>
                        <a class="hover:underline" href="#">
                            Kebijakan Privasi
                        </a>
                        <span class="hidden sm:inline">
                            •
                        </span>
                        <a class="hover:underline" href="#">
                            Kelompok Kami
                        </a>
                        <span class="hidden sm:inline">
                            •
                        </span>
                        <a class="hover:underline" href="#">
                            Media Sosial
                        </a>
                    </div>
                </div>
            </div>
            <div class="fixed bottom-4 right-4">
                <a class="bg-gray-800 p-2 rounded-full" href="#">
                    <i class="fas fa-chevron-up text-white"></i>
                </a>
            </div>
    </footer>
  </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
