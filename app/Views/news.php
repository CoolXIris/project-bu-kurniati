<?= $this->extend('layout/content_layout') ?>

<?= $this->section('content') ?>

<!-- About Section -->
<section id="about">
    <div class="about" style="padding: 38px;">
        <div class="text-about" style="align-items: center;">
            <p style="font-size: 17px;color:white;margin-bottom:28px">GadgetGlimpse > <span style="color: #ff184e;">News</span></p>
            <h2 style="color: white; margin-bottom:25px; font-size:29px">News</h2>
            <p style="color: white;font-size:20px;text-align: justify" class="about-text">Laman ini menyajikan berita terkini seputar dunia teknologi, mulai dari rilis produk, inovasi teranyar, hingga tren pasar yang membentuk masa depan. Pembaca dapat menemukan update perkembangan teknologi yang mencakup beragam sektor, dari kecerdasan buatan, komputasi awan, hingga transformasi digital dalam dunia bisnis. Tidak hanya menyajikan informasi mendalam, laman ini juga merangkum analisis pasar dan tren yang sedang panas dibicarakan, sehingga menjadi sumber referensi terpercaya bagi siapa saja yang ingin selalu up-to-date dengan dunia teknologi. Dengan gaya penyajian yang dinamis dan kaya informasi, laman ini siap membawa pembaca lebih dekat dengan inovasi masa kini dan masa depan.</p>
        </div>
    </div>
</section>

<!-- Content Section -->
<h3 style="margin-left: 50px;margin-top:40px;color:white;font-size:25px"><span style="color: #ff184e;">/</span> Latest News <span style="color: #ff184e;">/</span></h3>
<div class="news-container">
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/MediaTek-Dimensity-9400.jpg') ?>" alt="News Image">
            <span class="badge-bottom-left">CHIPSET</span>
        </div>
        <a href="<?= base_url('page/mediatek_dimensity9400') ?>" class="head_line">Chip Flagship Mediatek Dimensity 9400 Maksimalkan Performa & Efisiensi, Siap Untuk Era AI Agentik</a>
        <p class="description">MediaTek Dimensity 9400 siap debut di flagship terbaru rilisan akhir 2024</p>
        <p class="author"><span style="font-style: bold;">Prasetyo Herfianto</span> | 10 October 2024</p>
    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/XGS-PON-WiFi-7.jpeg') ?>" alt="News Image">
            <span class="badge-bottom-left">QUALCOMM</span>
        </div>
        <a href="<?= base_url('page/vnpt') ?>" class="head_line">VNPT & Qualcomm Luncurkan XGS-PON WiFi 7, Kecepatan Internet Sampai 22 Gbps</a>
        <p class="description">Vietnam Post and Telecommunications Group (VNPT) baru saja meluncurkan layanan XGS-PON WiFi...</p>
        <p class="author">
            <bold>Christopher Louis</bold> | 10 October 2024
        </p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/mobile-banking-ilustrasi.jpg') ?>" alt="News Image">
            <span class="badge-bottom-left">APLIKASI FINTECH</span>
        </div>
        <a href="<?= base_url('page/lokadata') ?>" class="head_line">Laporan Lokadata: 73 Persen Gen Z Beralih Gunakan Bank Digital</a>
        <p class="description">Jakarta, GadgetGlimpse - Lokadata.id, perusahaan riset ini mengungkapkan laporannya yang menyebutkan 73...</p>
        <p class="author">Christopher Louis | 09 October 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/Tiktok.jpeg') ?>" alt="News Image">
            <span class="badge-bottom-left">APLIKASI TIKTOK</span>
        </div>
        <a href="<?= base_url('page/tiktok_as') ?>" class="head_line">Tiktok Dituntut Jaksa Agung AS, Dianggap Tak Perhatikan Kesehatan Mental Remaja</a>
        <p class="description">Baru-baru ini, sebanyak 14 jaksa agung dari negara bagian Amerika Serikat telah...</p>
        <p class="author">Christopher Louis | 9 October 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/indosat-HiFi.jpeg') ?>" alt="News Image">
            <span class="badge-bottom-left">INDOSAT HIFI</span>
        </div>
        <a href="<?= base_url('page/mncplay') ?>" class="head_line">MNC Play Resmi Bermigrasi ke Indosat HiFi, Janjikan Kualitas Interner Lebih Prima</a>
        <p class="description">Indosat secara resmi mengumumkan transformasi brand layanan internet MNC Play menjadi Indosat...</p>
        <p class="author">Christopher Louis | 9 October 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/Samsung-Galaxy-A16.jpeg') ?>" alt="News Image">
            <span class="badge-bottom-left">GALAXY A16 5G</span>
        </div>
        <a href="<?= base_url('page/galaxy_a16') ?>" class="head_line">Samsung Galaxy A16 5G Siap Meramaikan Pasar Mid-Range Tanah Air</a>
        <p class="description">Samsung bakal meluncurkan Galaxy A16 5G sebagai ponsel mid-range harga terjangkau di...</p>
        <p class="author">Christopher Louis | 8 October 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
            <span class="badge-bottom-left">SOLUSI KEAMANAN DATA</span>
        </div>
        <a href="<?= base_url('page/synology') ?>" class="head_line">Solusi Enterprise Terbaru Synology, Integrasikan AI & Kamera Pengintai Berbasis Cloud</a>
        <p class="description">Synology integrasikan AI secara mendalam, termasuk untuk membuat ringkasan dokumen sampai membuat...</p>
        <p class="author">Christopher Louis | 8 October 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/Asus-NUC.jpeg') ?>" alt="News Image">
            <span class="badge-bottom-left">APPLE</span>
        </div>
        <a href="<?= base_url('page/smart_ring') ?>" class="head_line">Apple Dikabarkan Batal Kembangkan Smart Ring. Ini Alasannya</a>
        <p class="description">Pasar smart ring kini baru didominasi sejumlah vendor saja, seperti Oura dan ...</p>
        <p class="author">Christopher Louis | 8 October 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/Synology-Solution.jpg') ?>" alt="News Image">
            <span class="badge-bottom-left">ASUS</span>
        </div>
        <a href="<?= base_url('page/asus_nuc') ?>" class="head_line">Kilas Balik 1 Tahun Asus Akuisisi NUC dari Intel</a>
        <p class="description">ASUS Nuc berhasil menjadi opsi utama dalam pasar mini PC.</p>
        <p class="author">Christopher Louis | 7 October 2024</p>

    </div>

    <!-- Tambahkan card lain sesuai kebutuhan -->
</div>

<?= $this->endSection() ?>