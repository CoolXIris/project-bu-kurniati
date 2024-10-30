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
            <p style="font-size: 13px;color:white">GadgetGlimpse > <span style="color: #ff184e;">Rekomendasi</span></p>
            <h2 style="color: white; margin-bottom:25px">Rekomendasi</h2>
            <p style="color: white;">menyajikan ulasan berita terbaru yang komprehensif seputar teknologi informasi dan telekomunikasi, gadget, dan sebagainya.</p>
        </div>
        <div class="image-about">
            <img src="<?= base_url('css/img/News.jpeg') ?>" class="rounded mx-auto d-block" alt="news">
        </div>
    </div>

    <!-- Content Section -->
    <h3 style="margin-left: 50px;margin-top:40px;color:white;"><span style="color: #ff184e;">/</span> Latest News <span style="color: #ff184e;">/</span></h3>
    <div class="news-container">
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/MediaTek-Dimensity-9400.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">
                    <div id="HEADLINE"></div>
                </span>
            </div>
            <a href="#" class="head_line">Rekomendasi Laptop Tipis Bertenaga, Cocok Untuk Kerja & Kuliah</a>
            <p class="description">Ingin Perangkat Ringan Nan Kencang?Berikut Rekomendasi Laptop Tipis Yang Pas...</p>
            <p class="author"><span style="font-style: bold;">Redaksi</span> | 29 September 2024</p>
        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/XGS-PON-WiFi-7.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">HEADLINE</span>
            </div>
            <a href="#" class="head_line">Jajaran AIOT Xiaomi Terbaru Dari Robot Vacuum Hingga Electric Scooter </a>
            <p class="description">Jajaran Produk AIOT Xiaomi Terbru 2024 Diluncurkan. Mulai Dari Robot Vacuum,Smart ...</p>
            <p class="author">
                <bold>Bambang Dwi Atmoko</bold> | 10 Agustus 2024
            </p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/mobile-banking-ilustrasi.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">METAMASK</span>
            </div>
            <a href="#" class="head_line">5 Rekomendasi website web3 paling potensial di 2024...</a>
            <p class="description">dengan teknologi web3 wallet, Dan blockchain banyak orang ingin berinvestasi crypto.ada...</p>
            <p class="author">Bambang Dwi Atmoko | 19 juli 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Tiktok.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">HEADLINE</span>
            </div>
            <a href="#" class="head_line">5 Aplikasi pengganti tokopedia NOW, Belanja kebutuhan pokok jadi lebih cepat!</a>
            <p class="description">jakarta,gizmologi-gizmologi akan memberitahu kamu aplikasi atau layanan pengganti tokopedia...</p>
            <p class="author">Zihan Fajirin | 15 juli 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/indosat-HiFi.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">HEADLINE</span>
            </div>
            <a href="#" class="head_line">Rekomendasi game ios seru , bisa bikin kamu ketagihan!</a>
            <p class="description">jakarta,gizmologi-bermain game diperangkat gadget merupakan hiburan yang bisa kamu...</p>
            <p class="author">zihan fajrin | 26 mei 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Samsung-Galaxy-A16.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">HARGA TECNO SPARK 2O PRO+</span>
            </div>
            <a href="#" class="head_line">Ini 5 Kelebihan Tecno Spark 20 pro+,Segudang Fitur Harga2 Jutaan</a>
            <p class="description">Dengan Segudang Fitur-Fitur , kelebihan TECNO SPARK 20 pro+ Menjadi smartphone 2 jutaan...</p>
            <p class="author">bambang dwi atmoko | 20 mei 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">#HEADLINE</span>
            </div>
            <a href="#" class="head_line">Jajaran redmi watch 4 dan redmi buds 5 series lengkapi gaya iconic kamu!</a>
            <p class="description">xiaomi memiliki rangkaian AIoT Wearables terbaru redmi buds 5,redmi buds 5...</p>
            <p class="author">Redaksi | 22 April 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Asus-NUC.jpeg') ?>" alt="News Image">
                <span class="badge-bottom-left">#HEADLINE</span>
            </div>
            <a href="#" class="head_line">Rekomendasi Hp Samsung 5 Jutaan Rupiah, Baterai Besar Buat Seharian!</a>
            <p class="description">Berikut Rekomendasi Hp Samsung 5 Jutaan Rupiah Atau Dibawahnya Yang Memiliki Baterai...</p>
            <p class="author">Zihan Fajrin | 31 Maret 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">DEVELOPER GAME LOKAL</span>
            </div>
            <a href="#" class="head_line">Rekomendasi Game Seru Di Hp Cocok Buat Ngabuburit</a>
            <p class="description">Jakarta, Gizmologi - Bermain Game Seru Di Hp Ketika Ngabuburit Bisa Membuat Kita...</p>
            <p class="author">Zihan Fajrin | 23 Maret 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">#HEADLINE</span>
            </div>
            <a href="#" class="head_line">Rekomendasi Game Ngabuburit Di Android Biar Puasa Kamu Makin Seru </a>
            <p class="description">Merayakan Ibadah Puasa Perlu Dijalani Dengan Menyenangkan, Kamu Bisa Untuk Memainkan Game...</p>
            <p class="author">Zihan Fajrin | 12 Maret 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">#HEADLINE</span>
            </div>
            <a href="#" class="head_line">Rekomendasi game Ngabuburit Di Android Biar Puasa Kamu Makin Seru </a>
            <p class="description">Merayakan Ibadah Puasa Perlu Dijalani Dengan Menyenangkan, Kamu Bisa Untuk Memainkan Game...</p>
            <p class="author">Zihan Fajrin | 12 Maret 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">#HEADLINE</span>
            </div>
            <a href="#" class="head_line">5 Aplikasi Islami Yang Bisa Menambah Pahala Di Bulan Ramadhan </a>
            <p class="description">Banyak Cara Dalam Mendapatkan Pahala, Bahkan Melalui Perangkat Smartphone Juga Bisa Dengan...</p>
            <p class="author">Chandra Wirawan | 11 Maret 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">#HEADLINE</span>
            </div>
            <a href="#" class="head_line">Rekomendasi HP POCO Murah, Bisa Banget Buat Mabar Game MLBB Nih! </a>
            <p class="description">Terdapat Hp POCO Murah Yang Bisa Kamu Lirik Bila Budget Belum Bisa...</p>
            <p class="author">Zihan Fajrin | 5 Februari 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">#HEADLINE</span>
            </div>
            <a href="#" class="head_line">Rekomendasi Game Offline Di Android, Bisa Untuk Anak Hingga Dewasa </a>
            <p class="description">Ini Kelima Rekomendasi Game Offline Di Android Yang Bisa Kamu Unduh Lewat...</p>
            <p class="author">Zihan Fajrin | 29 Januari 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">GALAXY A15</span>
            </div>
            <a href="#" class="head_line">Rekomendasi HP Terjangkau Penuh Inovasi Di Januari 2024 </a>
            <p class="description">Gizmologi Hadirkan Rekomendasi Hp Terjangkau Di Januari 2024 Ini Dari Samsung Galaxy...</p>
            <p class="author">Zihan Fajrin | 22 Januari 2024</p>

        </div>
        <div class="news-card">
            <div class="image-container">
                <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
                <span class="badge-bottom-left">#HEADLINE</span>
            </div>
            <a href="#" class="head_line">Rekomendasi PC All in One Acer Dengan Intel Core i3 Processor, Siap Diandalkan! </a>
            <p class="description">Kami Telah Merangkum Sejumlah PC Acer Aspire ALL IN ONE (AIO) Berkinerja...</p>
            <p class="author">Redaksi | 29 Desember 2024</p>


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