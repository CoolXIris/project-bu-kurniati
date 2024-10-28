<?= $this->extend('layout/content_layout')?>

<?= $this->section('content')?>

    <!-- About Section -->
    <div class="about" style="padding: 40px;">
        <div class="text-about" style="align-items: center;">
            <p style="font-size: 17px;color:white;margin-bottom:28px">GadgetGlimpse > <span style="color: #ff184e;">Gadget</span></p>
            <h2 style="color: white; margin-bottom:25px; font-size:29px">Gadget</h2>
            <p style="color: white;font-size:20px">Informasi gadget terbaru baik itu smartphone, kamera, wearable, dan lainnya hanya di GadgetGlimpse</p>
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

<?= $this->endSection() ?>    
