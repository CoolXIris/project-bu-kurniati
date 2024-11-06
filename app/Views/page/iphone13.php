<?= $this->extend('page-layout/content-layout') ?>

<?= $this->section('content') ?>

<!-- content section -->
<section id="content" class="content">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-2/3">
                <div class="flex items-center mb-4">
                    <span class="bg-red-600 text-white px-2 py-1 rounded mr-2">
                        REVIEW
                    </span>
                    <span class="bg-red-600 text-white px-2 py-1 rounded">
                        SMARTPHONE
                    </span>
                </div>
                <h1 class="text-4xl font-bold mb-4">
                    Review iPhone 13 di Tahun 2024: Pilihan Pas dengan Harga Makin Terjangkau
                </h1>
                <div class="flex items-center mb-4">
                    <img alt="Author's profile picture" class="rounded-full w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/Y9Rel7BNX3TZI6YZvYAvoq7qlVKbbNML3toqBZuIU7QHCtyJA.jpg" width="50" />
                    <div>
                        <p class="font-bold">
                            Prasetyo Herfianto
                        </p>
                        <p class="text-white-400">
                            Published 9 September 2024 14:05
                        </p>
                    </div>
                </div>
                <img alt="Gaming setup with a monitor displaying a game, a gaming PC with RGB lighting, and gaming accessories" class="w-full mb-4" height="400" src="<?= base_url('css/img/op_ip13.png') ?>" style="width: 900px;height:500px;border-radius:2%;object-fit:content" />
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg mb-4">
                    <div class="flex items-center justify-between border-b border-gray-700 pb-4 mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-book text-red-500 mr-2"></i>
                            <h2 class="text-lg font-bold">Contents</h2>
                        </div>
                        <i id="toggleIcon-content1" class="fas fa-chevron-up cursor-pointer" onclick="toggleContent('content1')"></i>
                    </div>
                    <div id="content1" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <p class="border-b border-gray-700 pb-2 mb-2">Desain</p>
                            <p class="border-b border-gray-700 pb-2 mb-2">Layar</p>
                            <p class="border-b border-gray-700 pb-2 mb-2">Kamera</p>
                            <p class="border-b border-gray-700 pb-2 mb-2">Fitur</p>
                        </div>
                        <div>
                            <p class="border-b border-gray-700 pb-2 mb-2">Performa</p>
                            <p class="border-b border-gray-700 pb-2 mb-2">Baterai</p>
                            <p class="border-b border-gray-700 pb-2 mb-2">Kesimpulan</p>
                            <p class="border-b border-gray-700 pb-2 mb-2">Spesifikasi vivo X100 Pro</p>
                        </div>
                    </div>
                </div>
                <p class="text-white-300 mb-4" style="text-align: justify;">
                    Ketika sudah waktunya Apple merilis lini smartphone terbarunya seperti iPhone 16, tidak jarang friends justru menantikan iPhone generasi sebelumnya turun harga. Untuk tahun 2024 sendiri, pilihan kami untuk iPhone terbaik yang sudah jauh lebih terjangkau, jatuh pada iPhone 13 dengan harga mulai Rp9 jutaan saja. Yep, turun dari Rp14,999 juta saat awal rilis tiga tahun silam.
                </p>
                <p class="text-white-300 mb-4" style="text-align: justify;">
                    iPhone 13 dirilis bersama dengan seri Pro, dan keduanya membawa banyak pembaruan dibandingkan generasi sebelumnya. Mulai dari ukuran poni layar yang mengecil, baterai lebih besar, chipset baru, sampai mode perekaman video baru yang bisa berikan efek portrait sinematik dengan stabilisasi superior. Maka wajar bila masih banyak pengguna iPhone 13 yang belum merasa perlu untuk upgrade ke iPhone terbaru.
                </p>
                <p class="text-white-300 mb-4" style="text-align: justify;">
                    Bila friends ingin mencari iPhone terjangkau baik untuk secondary phone maupun iPhone pertama, tidak ada salahnya untuk melirik iPhone 13 yang kini sudah semakin terjangkau. Berikut impresinya ketika digunakan di tahun 2024.</p>

                <p class="text-white-300 font-bold mb-4" style="font-size:20px">Desain</p>
                <img alt="Gaming setup with a monitor displaying a game, a gaming PC with RGB lighting, and gaming accessories" class="w-full mb-4" height="400" src="<?= base_url('css/img/d_ip13.png') ?>" style="width: 900px;height:500px;border-radius:2%;object-fit:content" />
                <p class="text-white-300 mb-4" style="text-align: justify;">Bisa dibilang, iPhone 13 menjadi salah satu desain smartphone Apple yang paling ikonik, karena diteruskan hingga ke iPhone 15 (dengan rumor iPhone 16 kembali mengusung modul kamera sejajar layaknya iPhone 11). Smartphone ini juga cocok untuk kamu yang mencari smartphone dalam dimensi kompak, berkat dimensi layarnya yang memang tidak terlalu besar untuk standar masa kini.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Walaupun sedikit lebih tebal dan berat berkat baterai lebih besar, dimensi iPhone 13 secara keseluruhan masih tergolong kompak dan nyaman dalam genggaman. Permukaan flat di sisi belakang dan samping membuatnya tidak licin—walaupun sudutnya lebih tajam dari iPhone 15, masih sangat nyaman kok di permukaan telapak tangan.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Opsi warna Midnight yang saya ulas, terlihat memiliki sedikit corak biru. Mudah kotor karena permukaan yang digunakan adalah glossy, walaupun mudah dibersihkan pula. Kalau friends ingin tampilan iPhone 13 yang lebih bersih, bisa pilih opsi warna cerah, karena bekas sidik jari bakal lebih samar. Jadi bisa terus terlihat bersih tanpa case.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Kaca depan terlindung oleh Ceramic Shield, proteksi Apple yang lebih kuat dari Gorilla Glass standar dan dirancang lebih tahan retak maupun pecah. Belakangnya pun juga sudah diperkuat, termasuk kaca masing-masing kamera yang sudah gunakan material kristal safir. Walaupun membawa sertifikasi IP68, nyatanya iPhone 13 tahan air sampai kedalaman 6 meter, tidak hanya 1,5 meter saja.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Karena dirancang sebagai flagship, walaupun lepas tiga tahun, iPhone 13 masih terasa sangat premium dalam genggaman, dengan proteksi yang juga maksimal. Tentunya aksesori smartphone ini sangat mudah ditemukan di e-commerce, mulai dari case, pelindung layar, sampai aksesori yang memanfaatkan mekanisme MagSafe.</p>

                <p class="text-white-300 font-bold mb-4" style="font-size:20px">Layar</p>
                <img alt="Gaming setup with a monitor displaying a game, a gaming PC with RGB lighting, and gaming accessories" class="w-full mb-4" height="400" src="<?= base_url('css/img/l_ip13.png') ?>" style="width: 900px;height:500px;border-radius:2%;object-fit:content" />
                <p class="text-white-300 mb-4" style="text-align: justify;">Tanpa always-on display, punya refresh rate 60Hz. Ya, dua kekurangan ini saya mention dulu di awal. Yang pertama sih buat saya pribadi opsional, tapi untuk refresh rate, menurut saya memang sebuah kekurangan mutlak, terutama untuk harga jualnya. Memang, yang lebih mahal seperti iPhone 15 pun juga masih sama. Kabar baiknya, hanya dua poin itu saja yang jadi catatan.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Sisanya? Layar iPhone 13 punya kualitas panel yang sangat berkualitas, setara dengan flagship masa kini. Panel AMOLED-nya berikan warna yang punya akurasi tinggi, memiliki keempat sisi bezel sangat tipis, responsivitas mantap, sampai vibration motor (haptic) yang sangat memuaskan. Di sisi atas memang masih ada notch, namun ukurannya lebih kecil dari sebelumnya, dan bisa dimaafkan karena membawa sistem biometrik prima.</p>
                <img alt="Gaming setup with a monitor displaying a game, a gaming PC with RGB lighting, and gaming accessories" class="w-full mb-4" height="400" src="<?= base_url('css/img/l_ip131.png') ?>" style="width: 900px;height:500px;border-radius:2%;object-fit:content" />
                <p class="text-white-300 mb-4" style="text-align: justify;">Dalam dimensi 6,1 inci, ukurannya sangat nyaman untuk penggunaan satu tangan, dan masih cukup besar untuk bermain game sampai streaming video. Sudah mendukung konten HDR, dan bisa menyala cerah hingga 800 nits. Dengan auto brightness yang juga menurut saya salah satu yang terbaik di smartphone. Ya, yang bikin “jengkel” memang 60Hz-nya saja. Karena sisanya sudah sangat baik.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Terkait notch, kalau boleh komplain, walaupun lebih ramping dari iPhone 12 tapi ketebalannya naik dari sebelumnya. Untungnya bisa bekerja optimal dalam mendeteksi wajah, dengan dan tanpa masker atau kacamata sekalipun.</p>

                <p class="text-white-300 font-bold mb-4" style="font-size:20px">Kamera</p>
                <img alt="Gaming setup with a monitor displaying a game, a gaming PC with RGB lighting, and gaming accessories" class="w-full mb-4" height="400" src="<?= base_url('css/img/k_ip13.png') ?>" style="width: 900px;height:500px;border-radius:2%;object-fit:content" />
                <p class="text-white-300 mb-4" style="text-align: justify;">Dari generasi sebelumnya, kamera iPhone 13 mendapatkan peningkatan yang cukup signifikan, tidak hanya pada sektor hardware namun juga software. Dua sensor di belakang sama-sama beresolusi 12MP, satu berfungsi sebagai sensor utama, satu lagi merupakan sensor ultra-wide f/2.2 tanpa autofokus. Sensor utamanya bisa dibilang cukup spesial.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Selain dimensi sensor lebih besar, Apple juga memberikan stabilisasi hardware berjenis sensor-shift, jauh lebih efektif dibandingkan solusi konvensional untuk meredam guncangan atau getaran saat merekam video. Di depan, terdapat sensor 12MP dengan sudut pandang lebar, dan dilengkapi mode portrait berbasis hardware memanfaatkan sensor untuk Face ID.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Hasil foto iPhone 13 bisa dibilang memuaskan di segala kondisi pencahayaan. Mode malamnya bakal otomatis aktif ketika smartphone mendeteksi pencahayaan kurang, sementara dynamic range-nya sudah bisa bersaing dengan kompetitor di segmennya, memanfaatkan Smart HDR. Sekali jepret, sudah pas untuk langsung dibagikan ke media sosial.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Namun memang, pada generasi ini, skin tone bukan yang terbaik karena tidak jarang warna kulit terlihat sedikit berbeda dari aslinya. Begitu pula dengan efek sharpening yang terkadang terlalu tinggi terutama dalam kondisi pencahayaan sedikit menantang seperti indoor—selama tidak dilakukan proses zooming, memang tidak begitu terlihat.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Yang justru menurut saya spesial dari iPhone 13, adalah kemampuan merekam videonya. Semua sensor kamera (ya, semuanya) bisa merekam dalam resolusi 4K 60fps, dan sudah dengan stabilisasi yang sangat baik. friends juga bisa melakukan perpindahan antar sensor yang sangat halus antara sensor utama dan sensor ultra-wide di sisi belakang.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Tidak hanya itu, iPhone 13 juga jadi smartphone Apple pertama yang dilengkapi dengan mode Cinematic. Seperti mode portrait pada foto, kamu bisa berikan efek bokeh saat merekam video. Kemampuannya sudah sangat optimal menurut saya—pun ketika ada salah fokus, kamu bisa mengaturnya kembali setelah video tersimpan.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Menurut saya, hingga saat ini, iPhone 13 bisa menjadi alternatif smartphone terbaik untuk video. Yang perlu menjadi catatan hanyalah absennya sensor telefoto (sehingga kemampuan zoom terbatas), dan penggunaan port Lightning yang membuat friends lebih terbatas untuk memilih opsi aksesori seperti mikrofon eksternal.</p>


                <p class="text-white-300 font-bold mb-4" style="font-size:20px">Fitur</p>
                <img alt="Gaming setup with a monitor displaying a game, a gaming PC with RGB lighting, and gaming accessories" class="w-full mb-4" height="400" src="<?= base_url('css/img/f_ip13.png') ?>" style="width: 900px;height:500px;border-radius:2%;object-fit:content" />
                <p class="text-white-300 mb-4" style="text-align: justify;">Kabar baiknya, iPhone 13 masih termasuk iPhone yang mendapatkan pembaruan iOS 18. Selama saya menggunakan smartphone ini dengan iOS 18 Public Beta, performanya pun terjaga. Hanya saja memang tidak mendapatkan semua fitur terbaru, termasuk Apple Intelligence yang memang hanya untuk iPhone 15 Pro ke atas. Setidaknya fitur kustomisasi home screen masih dapat.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Meluncur dengan iOS 15, biasanya sih smartphone Apple mendapat dukungan pembaruan OS 5-6 tahun, jadi setidaknya masih aman untuk penggunaan kira-kira 2-3 tahun ke depan. Sejumlah fitur modern juga sudah dibawa, sebut saja kemampuan untuk kendali mikrofon agar memberikan efek noise cancelling yang bisa berfungsi baik di semua aplikasi pihak ketiga termasuk zoom—membantu ketika earphone yang kita gunakan, tak memiliki kemampuan tersebut.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Kualitas speaker stereonya juga tergolong sangat baik di kelasnya, dengan output yang terdengar seimbang baik dari sisi atas maupun bawah layar. Fitur NFC juga berjalan lancar untuk aplikasi perbankan serta aplikasi untuk top-up kartu e-money. Jaringan 5G juga bisa tertangkap dengan baik di sejumlah area di kota besar seperti Jakarta secara otomatis.</p>

                <p class="text-white-300 font-bold mb-4" style="font-size:20px">Performa</p>
                <img alt="Gaming setup with a monitor displaying a game, a gaming PC with RGB lighting, and gaming accessories" class="w-full mb-4" height="400" src="<?= base_url('css/img/p_ip13.png') ?>" style="width: 900px;height:500px;border-radius:2%;object-fit:content" />
                <p class="text-white-300 mb-4" style="text-align: justify;">Walaupun sudah dirilis sejak 2021 lalu, chipset yang disematkan ke dalam iPhone 13 tergolong kencang dan futuristik. Pasalnya, cip A15 Bionic sudah mengusung fabrikasi 5nm generasi kedua dari TSMC, sehingga sudah sangat efisien ketika diluncurkan. Bawa CPU 6 inti, GPU 4 inti, RAM 4GB dan pilihan memori yang kini dua kali lipat lebih lega dari iPhone 12.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Memang secara angka tidak ada yang wow, cenderung tertinggal kalau dibandingkan Android rilisan terkini dengan harga sama. Namun berkat penggunaan iOS, performanya sangat terjaga dan bisa dibilang setara dengan flagship Android terbaru. Sedikit batasan mungkin ada di multitasking, di mana bisa lebih banyak aplikasi yang terjeda bila memang sudah banyak yang diakses.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Namun berkat iOS 18, kini lebih banyak aplikasi termasuk Instagram yang sudah diperbarui agar bisa tetap berjalan ketika pengguna akses aplikasi lain, sehingga unggahan Stories masih bisa terus berlanjut. Untuk main sejumlah judul game populer juga sangat lancar—mungkin berkat layarnya yang hanya 60Hz juga ya.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Yang sudah menunjukkan umurnya, menurut saya, adalah suhu perangkat. Saat tidak menggunakan case, iPhone 13 terasa cukup mudah hangat, baik ketika akses kamera, edit video, gaming dan lainnya. Sedikit lebih hangat dari iPhone 14 Pro & 15 Pro Series. Masih dalam taraf aman kok, tak sampai overheat.</p>

                <p class="text-white-300 font-bold mb-4" style="font-size:20px">Baterai</p>
                <img alt="Gaming setup with a monitor displaying a game, a gaming PC with RGB lighting, and gaming accessories" class="w-full mb-4" height="400" src="<?= base_url('css/img/b_ip13.png') ?>" style="width: 900px;height:500px;border-radius:2%;object-fit:content" />
                <p class="text-white-300 mb-4" style="text-align: justify;">Jauh lebih besar dibandingkan generasi sebelumnya, baterai iPhone 13 dirancang dengan kapasitas 3,240 mAh. Ya, tentu saja di atas kertas terlihat jauh lebih kecil dari standar baterai smartphone Android masa kini, termasuk kompetitor terdahulu seperti Galaxy S Series. Namun berkat chipset dan sistem operasi rancangan sendiri, efisiensi bisa jauh lebih maksimal.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Ketika menggunakan iPhone 13 sebagai daily driver, saya bisa mendapatkan waktu hampir seharian penuh. Kalau cabut charger dari sekitar jam 6-7 dan berencana untuk menggunakannya secara intens sampai jam 10-11 malam, perlu mengaktifkan mode hemat daya, atau membawa powerbank untuk jaga-jaga setelah jam makan malam. Untuk ukurannya yang kompak, sudah tergolong baik.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Apple sebutkan bila baterai iPhone 13 bisa terisi hingga 50% dalam waktu 30 menit, lewat fast charging 20W yang dijual terpisah. Kalau ingin mencapai 100% membutuhkan waktu sekitar 90 menit. Sementara untuk pengisian daya nirkabel, bisa cukup cepat dengan dukungan Qi2 15W.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Untuk sebuah smartphone dengan harga mendekati Rp10 juta, tentu dayanya jauh lebih kecil dibandingkan, semisal, smartphone rilisan realme sampai Xiaomi yang bisa mencapai 120W. Namun karena kapasitas baterainya lebih kecil, kecepatan pengisiannya tak begitu tertinggal. Mengingat Galaxy S24 dan foldable Samsung pun juga hanya “sebatas” 25W.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Yang menjadi masalah, tentu saja penggunaan port Lightning, alias belum USB-C. Membuat friends harus membawa kabel pengisi daya sendiri untuk iPhone 13 ketika harus bepergian, bila memang perangkat lainnya menggunakan port lain seperti laptop, smartphone Android, hingga TWS.</p>

                <p class="text-white-300 font-bold mb-4" style="font-size:20px">Kesimpulan</p>
                <img alt="Gaming setup with a monitor displaying a game, a gaming PC with RGB lighting, and gaming accessories" class="w-full mb-4" height="400" src="<?= base_url('css/img/ke_ip13.png') ?>" style="width: 900px;height:500px;border-radius:2%;object-fit:content" />
                <p class="text-white-300 mb-4" style="text-align: justify;">Untuk tahun 2024, iPhone 13 bisa jadi pilihan paling pas dengan harga yang masih terjangkau. Chipset dan spesifikasi lainnya hampir identik dengan iPhone 14. Bagaimana dengan iPhone 12? Dengan selisih nggak sampai Rp2 juta, kamu mendapatkan banyak fitur baru, ditambah kapasitas memori dua kali lebih besar, mengingat iPhone 12 dimulai dari 64GB.</p>
                <p class="text-white-300 mb-4" style="text-align: justify;">Terima kasih untuk Studio Ponsel yang telah meminjamkan unit iPhone 13 supaya timlogi bisa ulas kembali di tahun 2024 ini. Untuk harga produk Apple dan gadget lain sampai aksesori selengkapnya, friends bisa mengunjungi toko Studio Ponsel baik di Tokopedia maupun TikTok resminya.</p>

            </div>
            <div class="lg:w-1/3 lg:pl-8">
                <div class="sticky top-4 mb-8">
                    <h2 class="text-xl font-bold mb-4 border-b border-pink-600 pb-2">
                        Latest Stories
                    </h2>
                    <div class="flex items-center mb-4">
                        <img alt="Thumbnail of the article" class="w-24 h-16 mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/8tyi3ikLqir3FtUn3arArt3JMxAo9OTAGt5aXqhOGzHAE46E.jpg" width="100" />
                        <div>
                            <p class="font-bold">
                                Tips Rakit PC Gaming Edisi 2024, Mudah dan Simpel!
                            </p>
                            <p class="text-white-400">
                                Komputer / Tips
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <img alt="Thumbnail of the article" class="w-24 h-16 mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/PjDvyYxpmkYdBBmaTNF1plEzbVYNk61dXuq2QFFLSOeePgrTA.jpg" width="100" />
                        <div>
                            <p class="font-bold">
                                Laporan Ungkap Gen Z Sering Gunakan Pay Later
                            </p>
                            <p class="text-white-400">
                                Business
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <img alt="Thumbnail of the article" class="w-24 h-16 mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/i0zrHVkCVf0seU6BecIt9B0ZJinljmxNlFcDZV1fGEHzfBcdC.jpg" width="100" />
                        <div>
                            <p class="font-bold">
                                Virtus Showcase 2024 Bahas Tantangan Transformasi Bisnis Menggunakan AI
                            </p>
                            <p class="text-white-400">
                                News
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <img alt="Thumbnail of the article" class="w-24 h-16 mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/fLwtdMygcjXDSSGMdBjwO44hYNieYXnKm3J8zYtmIty6PgrTA.jpg" width="100" />
                        <div>
                            <p class="font-bold">
                                IFS Beberkan Manfaat Teknologi AI Bagi Perusahaan di Indonesia
                            </p>
                            <p class="text-white-400">
                                Teknologi
                            </p>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold mb-4 border-b border-pink-600 pb-2">
                            Latest Review
                        </h2>
                        <div class="flex items-center mb-4">
                            <img alt="Thumbnail of the review" class="w-24 h-16 mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/57JpYjF3TK6RIFqafr44NJ4Ox7AfxwSkUp2GJyzyLL1UEalTA.jpg" width="100" />
                            <div>
                                <p class="font-bold">
                                    Review ZTE Blade A35: Nggak Sampai Sejuta, Bawa Gimmick Menarik
                                </p>
                                <p class="text-white-400">
                                    Review
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center mb-4">
                            <img alt="Thumbnail of the review" class="w-24 h-16 mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/57JpYjF3TK6RIFqafr44NJ4Ox7AfxwSkUp2GJyzyLL1UEalTA.jpg" width="100" />
                            <div>
                                <p class="font-bold">
                                    Review vivo X100 Pro: Hadir Belakangan, Kualitas Foto Jempolan
                                </p>
                                <p class="text-white-400">
                                    Review
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center mb-4">
                            <img alt="Thumbnail of the review" class="w-24 h-16 mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/57JpYjF3TK6RIFqafr44NJ4Ox7AfxwSkUp2GJyzyLL1UEalTA.jpg" width="100" />
                            <div>
                                <p class="font-bold">
                                    Review vivo X100 Pro: Hadir Belakangan, Kualitas Foto Jempolan
                                </p>
                                <p class="text-white-400">
                                    Review
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center mb-4">
                            <img alt="Thumbnail of the review" class="w-24 h-16 mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/57JpYjF3TK6RIFqafr44NJ4Ox7AfxwSkUp2GJyzyLL1UEalTA.jpg" width="100" />
                            <div>
                                <p class="font-bold">
                                    Review vivo X100 Pro: Hadir Belakangan, Kualitas Foto Jempolan
                                </p>
                                <p class="text-white-400">
                                    Review
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="specification">
    <div class="max-w-4xl ml-0 p-4">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 p-4 flex items-center justify-center">
                <img
                    alt="Smartphone with a large screen and a circular camera module on the back"
                    class="border-2 border-gray-700 object-content w-full md:w-auto"
                    src="<?= base_url('css/img/spec_ip13.png') ?>"
                    style="border-radius: 3%;" />
            </div>
            <div class="w-full md:w-1/2 p-4 flex flex-col justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-blue-400 mb-1">Rp9.999.000,00</h1>
                    <p class="mt-2"><span class="font-bold">Brand:</span> Apple</p>
                    <p class="mt-1"><span class="font-bold">Category:</span> Smartphone</p>
                    <div class="mt-2">
                        <input class="mr-2" id="compare" type="checkbox" />
                        <label for="compare">Add to Compare</label>
                    </div>
                </div>
                <div class="mt-4 space-y-2">
                    <div class="flex items-center">
                        <i class="fas fa-microchip text-blue-400 mr-2"></i>
                        <span class="w-1/3">Chipset</span>
                        <span class="ml-auto w-2/3 text-right">Apple A15 Bionic (5 nm)</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-memory text-blue-400 mr-2"></i>
                        <span class="w-1/3">Memory</span>
                        <span class="ml-auto w-2/3 text-right">4GB RAM; 128GB, 256GB, 512GB NVMe, no micro SD card</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-battery-full text-blue-400 mr-2"></i>
                        <span class="w-1/3">Battery</span>
                        <span class="ml-auto w-2/3 text-right">Li-Ion 3240 mAh, non-removable</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-tv text-blue-400 mr-2"></i>
                        <span class="w-1/3">Display</span>
                        <span class="ml-auto w-2/3 text-right">6.1 inches, 1170 x 2532 pixels, 19.5:9 ratio Super Retina XDR OLED</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-camera text-blue-400 mr-2"></i>
                        <span class="w-1/3">Camera</span>
                        <span class="ml-auto w-2/3 text-right">12MP + 12MP (back), 12MP (front)</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-cogs text-blue-400 mr-2"></i>
                        <span class="w-1/3">OS</span>
                        <span class="ml-auto w-2/3 text-right">iOS 15</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="summary">
    <div class="max-w-3xl ml-3 p-4">
        <div class="mt-6 border-t border-gray-700 pt-4"></div>
        <div class="bg-gray-800 rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <img
                    src="<?= base_url('css/img/ke_ip13.png') ?>"
                    alt="Close-up of ZTE Blade A35 smartphone"
                    class="w-full md:w-1/2 h-auto mx-auto md:ml-4"
                    style="border-radius: 3%;" />
                <div class="w-full md:w-1/2 p-4 flex flex-col justify-center">
                    <h1 class="text-2xl font-bold text-white">Review iPhone 13</h1>
                    <div class="flex items-center justify-between mt-2">
                        <div class="text-4xl font-bold text-yellow-500">8.5</div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <!-- Progress bars with ratings -->
                <div class="space-y-4">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg text-white">Design</span>
                            <span class="text-lg text-white">8.8</span>
                        </div>
                        <div class="h-2 bg-gray-700 rounded-full mt-1">
                            <div class="h-full bg-yellow-500 rounded-full" style="width: 88%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg text-white">Display</span>
                            <span class="text-lg text-white">8.5</span>
                        </div>
                        <div class="h-2 bg-gray-700 rounded-full mt-1">
                            <div class="h-full bg-yellow-500 rounded-full" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg text-white">Camera</span>
                            <span class="text-lg text-white">8.5</span>
                        </div>
                        <div class="h-2 bg-gray-700 rounded-full mt-1">
                            <div class="h-full bg-yellow-500 rounded-full" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg text-white">Features</span>
                            <span class="text-lg text-white">8.4</span>
                        </div>
                        <div class="h-2 bg-gray-700 rounded-full mt-1">
                            <div class="h-full bg-yellow-500 rounded-full" style="width: 84%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg text-white">Performance</span>
                            <span class="text-lg text-white">8.4</span>
                        </div>
                        <div class="h-2 bg-gray-700 rounded-full mt-1">
                            <div class="h-full bg-yellow-500 rounded-full" style="width: 84%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg text-white">Battery</span>
                            <span class="text-lg text-white">8.5</span>
                        </div>
                        <div class="h-2 bg-gray-700 rounded-full mt-1">
                            <div class="h-full bg-yellow-500 rounded-full" style="width: 85%;"></div>
                        </div>
                    </div>
                </div>
                <!-- Good stuff / Bad stuff section -->
                <div class="mt-6 border-t border-gray-700 pt-4 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                    <div class="w-full md:w-1/2">
                        <h2 class="text-xl font-bold mb-2 text-green-500"><i class="fas fa-thumbs-up"></i> Good Stuff</h2>
                        <ul class="list-disc list-inside text-white">
                            <li>Desain kompak untuk flagship</li>
                            <li>Dukungan pembaruan software masih prima</li>
                            <li>Kualitas kamera terutama video superior</li>
                            <li>Layar OLED berkualitas</li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2">
                        <h2 class="text-xl font-bold mb-2 text-red-500"><i class="fas fa-thumbs-down"></i> Bad Stuff</h2>
                        <ul class="list-disc list-inside text-white">
                            <li>Belum pakai USB-C</li>
                            <li>Tidak ada sensor telefoto</li>
                            <li>Layar masih 60Hz</li>
                        </ul>
                    </div>
                </div>
                <!-- Summary -->
                <div class="mt-6 border-t border-gray-700 pt-4">
                    <h2 class="text-xl font-bold text-white">Summary</h2>
                    <p class="mt-2 text-gray-300">Dengan harga yang sudah semakin terjangkau, iPhone 13 cocok sebagai opsi smartphone Apple terjangkau yang masih punya dukungan pembaruan cukup lama.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>