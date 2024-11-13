<?= $this->extend('layout/content_layout') ?>

<?= $this->section('content') ?>


<!-- About Section -->
<section id="about">
    <div class="about" style="padding: 40px;">
        <div class="text-about" style="align-items: center;">
            <p style="font-size: 17px;color:white;margin-bottom:28px">GadgetGlimpse > <span style="color: #ff184e;">Laptop</span></p>
            <h2 style="color: white; margin-bottom:25px; font-size:29px">Laptop</h2>
            <p style="color: white;font-size:20px;text-align:justify;" class="about-text">Laman ini menyajikan berita terbaru dan ulasan mendalam seputar laptop dan komputer, mengupas produk-produk terkini secara detail. Fokus bahasan mencakup berbagai aspek penting, seperti desain, performa layar, kecepatan prosesor, kualitas grafis, fitur khusus, hingga daya tahan baterai. Setiap ulasan menyajikan informasi lengkap mengenai spesifikasi, harga, serta kelebihan dan kekurangan dari produk terkait. Selain review, laman ini juga memberikan update tentang inovasi dan tren terbaru di dunia laptop dan komputer, membantu pembaca memahami perkembangan teknologi yang pesat dan memberikan panduan yang relevan sebelum memutuskan membeli perangkat baru yang sesuai kebutuhan.</p>
        </div>
        <div class="image-about">

        </div>
    </div>
</section>

<!-- Content Section -->
<h3 style="margin-left: 50px;margin-top:40px;color:white;font-size:25px"><span style="color: #ff184e;">/</span> Latest Laptop <span style="color: #ff184e;">/</span></h3>
<div class="news-container">
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/razerv3.png') ?>" alt="News Image">
            <span class="badge-bottom-left">MOUSE GAMING</span>
        </div>
        <a href="<?= base_url('page/razerv3') ?>" class="head_line">Razer Luncurkan Viper V3 Pro Sentinels Edition: Kolaborasi Ikonik dengan Tim Esports Sentinels</a>
        <p class="description">Razer bersama dengan Sentinels merilis mouse gaming lewat Viper V3 Pro Sentinels…</p>
        <p class="author"><span style="font-style: bold;">Prasetyo Herfianto</span> | 10 October 2024</p>
    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/k70pro.png') ?>" alt="News Image">
            <span class="badge-bottom-left">AKSESORIS KOMPUTER</span>
        </div>
        <a href="<?= base_url('page/k70pro') ?>" class="head_line">Corsair Luncurkan Keyboard K70 PRO TKL, Punya Teknologi MGX Hyperdrive untuk Gamer Kompetitif</a>
        <p class="description">Inovasi terbaru Corsair untuk para gamer tercermin lewat fitur unggulan keyboard K70…</p>
        <p class="author">
            <bold>Christopher Louis</bold> | 10 October 2024
        </p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/ayaneo3.png') ?>" alt="News Image">
            <span class="badge-bottom-left">AYANEO 3</span>
        </div>
        <a href="<?= base_url('page/ayaneo3') ?>" class="head_line">Teaser Ayaneo 3 Muncul, Siap Jadi Ancaman Baru di Segmen PC Handheld</a>
        <p class="description">Begini penampakan awal pada Ayaneo 3, digadang sebagai PC Gaming Handheld dengan…</p>
        <p class="author">Christopher Louis | 09 October 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/ryzen9800.png') ?>" alt="News Image">
            <span class="badge-bottom-left">AMD REYZEN</span>
        </div>
        <a href="<?= base_url('page/ryzen9800') ?>" class="head_line">AMD Luncurkan Prosesor Ryzen 7 9800X3D: Inovasi Terbaru untuk Pengalaman Gaming Maksimal</a>
        <p class="description">AMD Ryzen 7 9800X3D Siap Meluncur, Dirancang khusus para gamer yang mengincar…</p>
        <p class="author">Christopher Louis | 10 November 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/zenbook14.png') ?>" alt="News Image">
            <span class="badge-bottom-left">ASUS</span>
        </div>
        <a href="<?= base_url('page/zenbook14') ?>" class="head_line">ASUS Zenbook S 14 Diresmikan, Laptop AI Tipis dan Ringan Terbaik Seharga Rp28 Juta</a>
        <p class="description">Dengan harga premium, ASUS Zenbook S 14 terbaru bawa sejumlah keunggulan menarik.</p>
        <p class="author">Christopher Louis | 15 November 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/asusz890.png') ?>" alt="News Image">
            <span class="badge-bottom-left">ASUS</span>
        </div>
        <a href="<?= base_url('page/asusz890') ?>" class="head_line">Motherboard ASUS Z890 Series, Berikan Solusi Baru Bagi Gamer Hingga Kreator</a>
        <p class="description">Asus resmi merilis motherboard terbarunya, ASUS Z890 Series yang mencakup ekosistem Prime,…</p>
        <p class="author">Christopher Louis | 8 October 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/macbookm4.png') ?>" alt="News Image">
            <span class="badge-bottom-left">APPLE</span>
        </div>
        <a href="<?= base_url('page/macbookm4') ?>" class="head_line">MacBook Pro M4 Hadir Membawa Webcam 12MP dan Daya Tahan Baterai 24 Jam</a>
        <p class="description">MacBook Pro M4 kembali tersedia dalam tiga opsi cip berbeda dan dua…</p>
        <p class="author">Christopher Louis | 12 Desember 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/macmini4.png') ?>" alt="News Image">
            <span class="badge-bottom-left">APPLE</span>
        </div>
        <a href="<?= base_url('page/macmini4') ?>" class="head_line">Mac Mini M4 Punya Ukuran Jauh Lebih Kecil, Performa Lebih Kencang</a>
        <p class="description">jauh lebih mungil, Mac Mini M4 tak sampai setengah ukuran generasi sebelumnya.</p>
        <p class="author">Prasetyo Herfianto | 20 November 2024</p>

    </div>
    <div class="news-card">
        <div class="image-container">
            <img src="<?= base_url('css/img/cra_efektif.png') ?>" alt="News Image">
            <span class="badge-bottom-left">TIPS & TRIK</span>
        </div>
        <a href="<?= base_url('page/cra_efektif') ?>" class="head_line">Inilah 3 Cara Efektif Membersihkan Laptop dari Debu & Minyak</a>
        <p class="description">Cara membersihkan laptop dari debu dan minyak ternyata mudah, dan berikut adalah…</p>
        <p class="author">Christopher Louis | 16 Oktober 2024</p>

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


    <?= $this->endSection() ?>