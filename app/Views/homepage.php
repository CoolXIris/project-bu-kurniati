<html>
    <head>
        <title>
        GADGETGLIMPSE
        </title>
        <script src="https://cdn.tailwindcss.com">
        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="<?= base_url('css/page/homepage.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/boostrap.min.css')?>">
        <style>
        body {
                    font-family: 'Roboto', sans-serif;
                }
        </style>
    </head>
    <body class="bg-gray-900 text-white" style="margin: 0;padding:200px;padding-top:0;padding-bottom:0">
  
    <!-- Navbar Section -->
    <nav class="bg-gray-900 py-2" style="margin-bottom: 30px;">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-4" style="display: flex;flex-direction:column;margin-left:15px">
                <a href="#" class="text-2xl font-bold">GADGETGLIMPSE</a>
                <span class="text-sm" style="font-size:11px">Review and News Around Technology</span>
            </div>
            <div class="flex items-center space-x-6">
                <div class="relative group">
                    <a class="focus:outline-none" href="<?= base_url('news')?>">NEWS</button>
                    
                </div>
                <div class="relative group">
                    <a class="focus:outline-none" href="<?= base_url('review')?>">REVIEW</button>
                    
                </div>
                <div class="relative group">
                    <a class="focus:outline-none" href="<?= base_url('gadget')?>">GADGET</button>
                    
                </div>
                <div class="relative group">
                    <a class="focus:outline-none" href="<?= base_url('laptop')?>">LAPTOP</button>
                </div>
                <div class="relative group">
                    <button class="focus:outline-none">MORE</button>
                    <div class="absolute hidden group-hover:block bg-gray-800 text-white mt-2 py-2 w-48">
                        <a href="<?= base_url('recommended')?>" class="block px-4 py-2">RECOMMENDED</a>
                        <a href="<?= base_url('tips') ?>" class="block px-4 py-2">TIPS</a>
                        <a href="<?= base_url('testspeed')?>" class="block px-4 py-2">TEST SPEED JARINGAN</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button class="focus:outline-none"><i class="fas fa-search"></i></button>
                <button class="focus:outline-none">Aa</button>
                <button class="focus:outline-none"><i class="fas fa-adjust"></i></button>
                <button class="relative focus:outline-none">
                    <i class="fas fa-bell"></i>
                    <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"></span>
                </button>
            </div>
        </div>
    </nav>


    <!-- Main content -->
    <section id="hero" class="hero" style="margin-bottom: 50px;">
        <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <!-- Main Article -->
            <div class="md:col-span-2">
            <div class="relative" >
            <img alt="ZTE Blade A35 smartphone with its box" class="w-full h-auto rounded-lg"  src="<?= base_url('css/img/ZTE-Blade-A35.jpg')?>" style="width: 800px;height:615px;object-fit:cover"/>
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-lg" style="width: 800px;">
            <div class="flex space-x-2 mb-2">
                <span class="bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">
                REVIEW
                </span>
                <span class="bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                SMARTPHONE
                </span>
            </div>
            <a href="<?= base_url('page/zte_blade')?>"><h2 class="text-2xl font-bold">
                Review ZTE Blade A35: Nggak Sampai Sejuta, Bawa Gimmick Menarik
            </h2></a>
            <div class="flex items-center mt-2">
                <div class="flex space-x-1">
                <div class="w-4 h-4 bg-red-600 rounded-full">
                </div>
                <div class="w-4 h-4 bg-orange-600 rounded-full">
                </div>
                <div class="w-4 h-4 bg-yellow-600 rounded-full">
                </div>
                <div class="w-4 h-4 bg-green-600 rounded-full">
                </div>
                <div class="w-4 h-4 bg-blue-600 rounded-full">
                </div>
                </div>
                <span class="ml-2 text-lg font-bold">
                8.6
                </span>
                <span class="ml-1 text-sm">
                out of 10
                </span>
            </div>
            <p class="mt-2">
                Apa saja yang bisa ditawarkan lewat ZTE Blade A35? Berikut ulasan lengkapnya!
            </p>
            <div class="flex items-center mt-2">
                <img alt="Author's avatar" class="w-8 h-8 rounded-full" height="32" src="https://storage.googleapis.com/a1aa/image/ykMcY9wjMc5TJJndayXU0RvcAkyoll2vf7uykypvTafVtnlTA.jpg" width="32"/>
                <div class="ml-2">
                <p class="text-sm font-bold">
                Prasetyo Herfianto
                </p>
                <p class="text-xs">
                10 October 2024 15:25
                </p>
                </div>
            </div>
            </div>
            </div>
            </div>
        <!-- Side Articles -->
            <div class="space-y-4">
            <div class="relative">
            <img alt="Comparison of Exynos 2200 and Dimensity 7300 chipsets" class="w-full h-auto rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/HZrTybHugZa2BhoRqB77xQ0ppH2SO3JMTmslFZlVkkDV7Z5E.jpg" width="400" style="width: 400px;height:300px"/>
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-lg" style="width: 400px;">
            <span class="bg-pink-600 text-white text-xs font-bold px-2 py-1 rounded">
                VERSUS
            </span>
            <a href="<?= base_url('page/chipset_exynos2200')?>"><h3 class="text-lg font-bold mt-2">
                Membandingkan Chipset Exynos 2200 vs Dimensity 7300, Mana yang Lebih Baik?
            </h3></a>
            <div class="flex items-center mt-2">
                <img alt="Author's avatar" class="w-8 h-8 rounded-full" height="32" src="https://storage.googleapis.com/a1aa/image/ykMcY9wjMc5TJJndayXU0RvcAkyoll2vf7uykypvTafVtnlTA.jpg" width="32"/>
                <div class="ml-2">
                <p class="text-sm font-bold">
                Prasetyo Herfianto
                </p>
                <p class="text-xs">
                8 October 2024 17:52
                </p>
                </div>
            </div>
            </div>
            </div>
            <div class="relative">
            <img alt="vivo X100 Pro smartphone" class="w-full h-auto rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/mLkdx29CFK6PE9sgtOZ8odC5T4kafUajAjZUxfdlKHDRtnlTA.jpg" width="400" style="width: 400px;height:300px"/>
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-lg" style="width: 400px;">
            <div class="flex space-x-2 mb-2">
                <span class="bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">
                REVIEW
                </span>
                <span class="bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                SMARTPHONE
                </span>
            </div>
            <a href="<?= base_url('page/vivo_x100pro')?>"><h3 class="text-lg font-bold">
                Review vivo X100 Pro: Hadir Belakangan, Kualitas Foto Jempolan
            </h3></a>
            <div class="flex items-center mt-2">
                <div class="flex space-x-1">
                <div class="w-4 h-4 bg-red-600 rounded-full">
                </div>
                <div class="w-4 h-4 bg-orange-600 rounded-full">
                </div>
                <div class="w-4 h-4 bg-yellow-600 rounded-full">
                </div>
                <div class="w-4 h-4 bg-green-600 rounded-full">
                </div>
                <div class="w-4 h-4 bg-blue-600 rounded-full">
                </div>
                </div>
                <span class="ml-2 text-lg font-bold">
                8.6
                </span>
                <span class="ml-1 text-sm">
                out of 10
                </span>
            </div>
            <div class="flex items-center mt-2">
                <img alt="Author's avatar" class="w-8 h-8 rounded-full" height="32" src="https://storage.googleapis.com/a1aa/image/ykMcY9wjMc5TJJndayXU0RvcAkyoll2vf7uykypvTafVtnlTA.jpg" width="32"/>
                <div class="ml-2">
                <p class="text-sm font-bold">
                Prasetyo Herfianto
                </p>
                <p class="text-xs">
                7 October 2024 19:05
                </p>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
        </div>

        <!-- below articles -->
        <div class="container mx-auto p-4">
            <div class="flex space-x-4">
                <!-- First News Item -->
                <div class="bg-gray-800 p-4 rounded-lg flex">
                <img alt="Futuristic RoboTaxi and RoboVan" class="w-48 h-32 object-cover rounded-lg" height="200" src="<?= base_url('css/img/Tesla-Robotaxi.jpg')?>" width="300"/>
                <div class="ml-4">
                <div class="flex space-x-2 mb-2">
                <span class="bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                    NEWS
                </span>
                <span class="bg-pink-600 text-white text-xs font-bold px-2 py-1 rounded">
                    SMART VEHICLE
                </span>
                </div>
                <a href=""><h2 class="text-lg font-bold">
                Elon Musk Kenalkan RoboTaxi &amp; RoboVan, Taksi Serba Otomatis Siap Produksi 2027
                </h2></a>
                <div class="flex items-center mt-2 text-sm text-gray-400">
                <img alt="Author's avatar" class="w-5 h-5 rounded-full mr-2" height="20" src="https://storage.googleapis.com/a1aa/image/qdHQJAe6UbRYGCikMLfhrGUVqCeVGGBIujG5plyCLHd3PQLnA.jpg" width="20"/>
                <span>
                    Christopher Louis
                </span>
                <span class="mx-2">
                    •
                </span>
                <span>
                    11 October 2024 13:42
                </span>
                </div>
                </div>
                </div>
                <!-- Second News Item -->
                <div class="bg-gray-800 p-4 rounded-lg flex">
                <img alt="MSI and Blizzard collaboration for Diablo IV" class="w-48 h-32 object-cover rounded-lg" height="200" src="<?= base_url('css/img/MSI-dan.jpeg')?>" width="300"/>
                <div class="ml-4">
                <div class="flex space-x-2 mb-2">
                <span class="bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                    GAMES
                </span>
                <span class="bg-pink-600 text-white text-xs font-bold px-2 py-1 rounded">
                    KOMPUTER
                </span>
                </div>
                <a href=""><h2 class="text-lg font-bold">
                MSI &amp; Blizzard Entertainment Berkolaborasi Hadirkan Diablo IV: Vessel of Hatred
                </h2></a>
                <div class="flex items-center mt-2 text-sm text-gray-400">
                <img alt="Author's avatar" class="w-5 h-5 rounded-full mr-2" height="20" src="https://storage.googleapis.com/a1aa/image/qdHQJAe6UbRYGCikMLfhrGUVqCeVGGBIujG5plyCLHd3PQLnA.jpg" width="20"/>
                <span>
                    Christopher Louis
                </span>
                <span class="mx-2">
                    •
                </span>
                <span>
                    11 October 2024 12:30
                </span>
                </div>
                </div>
                </div>
            </div>
            <!-- Navigation Arrows -->
            <div class="flex justify-center mt-4">
                <button class="bg-gray-700 text-white p-2 rounded-full mx-1">
                <i class="fas fa-chevron-left">
                </i>
                </button>
                <button class="bg-gray-700 text-white p-2 rounded-full mx-1">
                <i class="fas fa-chevron-right">
                </i>
                </button>
            </div>
        </div>
  </section>

  <!-- Latest review section -->
  <section id="latest-review" class="latest_review">
        <div class="container mx-auto p-4">
        <h2 class="text-xl font-bold mb-4 flex items-center" style="margin-left: 17px;">
            <span style="color: #ff184e;">/</span> 
            Latest Review 
            <span style="color: #ff184e;">/</span>  
        </h2>

        <div class="container mx-auto p-4">
            <div class="grid grid-cols-2 gap-4">
                <!-- First Review Card -->
                <div class="relative bg-gray-800 rounded-lg overflow-hidden">
                <img alt="ZTE Blade A35 smartphone with its box" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/eP5F3Mrz9X3gZqeoYO8sYKWIRHm7pfvh88KDUtUBHkb7bRLnA.jpg" width="600"/>
                <div class="absolute inset-0 bg-black bg-opacity-50 p-4 flex flex-col justify-end">
                <div class="flex space-x-2 mb-2">
                <span class="bg-blue-600 text-xs font-semibold px-2 py-1 rounded">
                    REVIEW
                </span>
                <span class="bg-red-600 text-xs font-semibold px-2 py-1 rounded">
                    SMARTPHONE
                </span>
                </div>
                <a href=""><h2 class="text-xl font-bold">
                Review ZTE Blade A35: Nggak Sampai Sejuta, Bawa Gimmick Menarik
                </h2></a>
                <div class="flex items-center mt-2">
                <div class="flex space-x-1">
                    <div class="w-4 h-4 bg-red-600">
                    </div>
                    <div class="w-4 h-4 bg-orange-600">
                    </div>
                    <div class="w-4 h-4 bg-yellow-600">
                    </div>
                    <div class="w-4 h-4 bg-green-600">
                    </div>
                    <div class="w-4 h-4 bg-blue-600">
                    </div>
                </div>
                <span class="ml-2 text-lg font-semibold">
                    8.6 out of 10
                </span>
                </div>
                </div>
                </div>
                <!-- Second Review Card -->
                <div class="relative bg-gray-800 rounded-lg overflow-hidden">
                <img alt="OPPO Reno12F 5G smartphone with its box" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/kgfsXxMwJsQPbyUAqDRejbbl2FZgS0Nl5ZkEDf7qGQkf3iWOB.jpg" width="600"/>
                <div class="absolute inset-0 bg-black bg-opacity-50 p-4 flex flex-col justify-end">
                <div class="flex space-x-2 mb-2">
                <span class="bg-blue-600 text-xs font-semibold px-2 py-1 rounded">
                    REVIEW
                </span>
                </div>
                <a href=""><h2 class="text-xl font-bold">
                Review OPPO Reno12F 5G: Smartphone Stylish Tahan Banting
                </h2></a>
                <div class="flex items-center mt-2">
                <div class="flex space-x-1">
                    <div class="w-4 h-4 bg-red-600">
                    </div>
                    <div class="w-4 h-4 bg-orange-600">
                    </div>
                    <div class="w-4 h-4 bg-yellow-600">
                    </div>
                    <div class="w-4 h-4 bg-green-600">
                    </div>
                    <div class="w-4 h-4 bg-blue-600">
                    </div>
                </div>
                <span class="ml-2 text-lg font-semibold">
                    9 out of 10
                </span>
                </div>
                </div>
                </div>
                <!-- Third Review Card -->
                <div class="relative bg-gray-800 rounded-lg overflow-hidden">
                <img alt="OPPO Reno12F 5G smartphone with its box" class="w-full h-48 object-cover" height="400" src="<?= base_url('css/img/realme-13-Pro.jpg')?>" width="600"/>
                <div class="absolute inset-0 bg-black bg-opacity-50 p-4 flex flex-col justify-end">
                <div class="flex space-x-2 mb-2">
                <span class="bg-blue-600 text-xs font-semibold px-2 py-1 rounded">
                    REVIEW
                </span>
                <span class="bg-red-600 text-xs font-semibold px-2 py-1 rounded">
                    SMARTPHONE
                </span>
                </div>
                <a href=""><h2 class="text-xl font-bold">
                Review realme 13 Pro+ 5G: Ketika Algoritma AI & Sensor Sony LYTIA Bersinergi
                </h2></a>
                <div class="flex items-center mt-2">
                <div class="flex space-x-1">
                    <div class="w-4 h-4 bg-red-600">
                    </div>
                    <div class="w-4 h-4 bg-orange-600">
                    </div>
                    <div class="w-4 h-4 bg-yellow-600">
                    </div>
                    <div class="w-4 h-4 bg-green-600">
                    </div>
                    <div class="w-4 h-4 bg-blue-600">
                    </div>
                </div>
                <span class="ml-2 text-lg font-semibold">
                    8.7 out of 10
                </span>
                </div>
                </div>
                </div>
                <!-- Fourth Review Card -->
                <div class="relative bg-gray-800 rounded-lg overflow-hidden">
                <img alt="OPPO Reno12F 5G smartphone with its box" class="w-full h-48 object-cover" height="400" src="<?= base_url('css/img/Samsung-Galaxy-Watch7.jpg')?>" width="600"/>
                <div class="absolute inset-0 bg-black bg-opacity-50 p-4 flex flex-col justify-end">
                <div class="flex space-x-2 mb-2">
                <span class="bg-blue-600 text-xs font-semibold px-2 py-1 rounded">
                    REVIEW
                </span>
                </div>
                <a href=""><h2 class="text-xl font-bold">
                Review Samsung Galaxy Watch7: Makin Pintar dengan AI
                </h2></a>
                <div class="flex items-center mt-2">
                <div class="flex space-x-1">
                    <div class="w-4 h-4 bg-red-600">
                    </div>
                    <div class="w-4 h-4 bg-orange-600">
                    </div>
                    <div class="w-4 h-4 bg-yellow-600">
                    </div>
                    <div class="w-4 h-4 bg-green-600">
                    </div>
                    <div class="w-4 h-4 bg-blue-600">
                    </div>
                </div>
                <span class="ml-2 text-lg font-semibold">
                    7.8 out of 10
                </span>
                </div>
                </div>
                </div>
            </div>
            </div>

            <div class="container mx-auto py-8">
                <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                    <!-- Review 1 -->
                    <div class="bg-gray-800 p-4 rounded-lg flex flex-col md:flex-row">
                    <img alt="Lenovo Yoga Book 9i (2024) laptop with dual screens" class="rounded-lg mb-4 md:mb-0" height="100" src="https://storage.googleapis.com/a1aa/image/g5aliXRfjP3tKaASfe4Sla1lPAumfeB6kHK9sSNXcwzisGtcC.jpg" width="150"/>
                    <div class="md:ml-4">
                    <a href=""><h2 class="text-lg font-bold mb-2">
                    Review Lenovo Yoga Book 9i (2024): Laptop Dua Layar Untuk Produktivitas Maksimal
                    </h2></a>
                    <div class="flex space-x-1">
                    <div class="w-4 h-4 bg-red-500">
                    </div>
                    <div class="w-4 h-4 bg-red-500">
                    </div>
                    <div class="w-4 h-4 bg-yellow-500">
                    </div>
                    <div class="w-4 h-4 bg-green-500">
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- Review 2 -->
                    <div class="bg-gray-800 p-4 rounded-lg flex flex-col md:flex-row">
                    <img alt="iPad Air M2 13 inch with large screen" class="rounded-lg mb-4 md:mb-0" height="100" src="https://storage.googleapis.com/a1aa/image/VwCiCPJpMM4rGVrnFg8If1pcaYfyrpqjeEEBMFbrAThOrRLnA.jpg" width="150"/>
                    <div class="md:ml-4">
                    <a href=""><h2 class="text-lg font-bold mb-2">
                    Review iPad Air M2 13 Inci: Layar Lega, Bisa Gantikan Laptop?
                    </h2></a>
                    <div class="flex space-x-1">
                    <div class="w-4 h-4 bg-red-500">
                    </div>
                    <div class="w-4 h-4 bg-red-500">
                    </div>
                    <div class="w-4 h-4 bg-yellow-500">
                    </div>
                    <div class="w-4 h-4 bg-green-500">
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- Review 3 -->
                    <div class="bg-gray-800 p-4 rounded-lg flex flex-col md:flex-row">
                    <img alt="realme 13 smartphone with camera and gaming performance" class="rounded-lg mb-4 md:mb-0" height="100" src="https://storage.googleapis.com/a1aa/image/TseTZnUs291db6U1JcnIrs1rmmiPOr5Zzc1SxQwh0tpya0yJA.jpg" width="150"/>
                    <div class="md:ml-4">
                    <a href=""><h2 class="text-lg font-bold mb-2">
                    Review realme 13: Gabungkan Kamera &amp; Performa Gaming Optimal di Kelasnya
                    </h2></a>
                    <div class="flex space-x-1">
                    <div class="w-4 h-4 bg-red-500">
                    </div>
                    <div class="w-4 h-4 bg-yellow-500">
                    </div>
                    <div class="w-4 h-4 bg-yellow-500">
                    </div>
                    <div class="w-4 h-4 bg-green-500">
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <div class="flex justify-center mt-4 space-x-4">
                    <button class="text-white">
                    <i class="fas fa-chevron-left">
                    </i>
                    </button>
                    <div class="flex space-x-2" style="margin-top: 4px;">
                    <div class="w-2 h-2 bg-white rounded-full">
                    </div>
                    <div class="w-2 h-2 bg-gray-500 rounded-full">
                    </div>
                    <div class="w-2 h-2 bg-gray-500 rounded-full">
                    </div>
                    </div>
                    <button class="text-white">
                    <i class="fas fa-chevron-right">
                    </i>
                    </button>
                </div>
                </div>
  </section>

  <section class="news-letter" id="news-letter">
    <div class="max-w-4xl mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold bg-red-600 px-2 py-1">
            GadgetGlimpse News
            </h1>
            <a class="text-sm text-gray-400 hover:text-white" href="#">
            View All
            <i class="fas fa-chevron-right">
            </i>
            </a>
        </div>
        <div class="space-y-8">
            <div class="flex flex-col md:flex-row bg-gray-800 p-4 rounded-lg">
            <div class="flex-1">
            <a href=""><h2 class="text-xl font-bold mb-2">
            Permata ME Jadi Wajah Baru Mobile Banking Permata Bank, Punya Fitur Transfer 13 Mata Uang Asing
            </h2></a>
            <p class="text-gray-400 mb-4">
            Aplikasi mobile Bank Permata ME tampil dengan wajah baru dan fitur transfer...
            </p>
            <div class="flex items-center text-gray-400 text-sm">
            <img alt="Profile picture of Christopher Louis" class="w-8 h-8 rounded-full mr-2" height="32" src="https://storage.googleapis.com/a1aa/image/0TJTuMAbutqmOJW5ME34BcFHlncsFeC8UGshdO7BJPGUQ0yJA.jpg" width="32"/>
            <span>
                Christopher Louis
            </span>
            <span class="mx-2">
                |
            </span>
            <span>
                11 October 2024 11:48
            </span>
            </div>
            </div>
            <div class="flex-shrink-0 md:ml-4 mt-4 md:mt-0 relative">
            <img alt="Image of a conference with people holding mobile phones" class="w-full h-full object-cover rounded-lg" height="200" src="<?= base_url('css/img/Permata-ME.jpeg')?>" width="300" style="width: 300px;height:200px"/>
            <span class="absolute bottom-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
            FINTECH
            </span>
            </div>
            </div>
            <!-- berita kedua -->
            <div class="flex flex-col md:flex-row bg-gray-800 p-4 rounded-lg">
            <div class="flex-1">
            <a href=""><h2 class="text-xl font-bold mb-2">
            OPPO Campus Ambassador Perdana di Indonesia, Beri Benefit Menarik &amp; Kembangkan Potensi Mahasiswa
            </h2></a>
            <p class="text-gray-400 mb-4">
            Selain membantu karier di masa depan, OPPO Campus Ambassador juga berkesempatan menjajal...
            </p>
            <div class="flex items-center text-gray-400 text-sm">
            <img alt="Profile picture of Prasetyo Herfianto" class="w-8 h-8 rounded-full mr-2" height="32" src="<?= base_url('css/img/OPPO-Campus.jpg')?>" width="32"/>
            <span>
                Prasetyo Herfianto
            </span>
            <span class="mx-2">
                |
            </span>
            <span>
                11 October 2024 09:15
            </span>
            </div>
            </div>
            <div class="flex-shrink-0 md:ml-4 mt-4 md:mt-0 relative">
            <img alt="Image of OPPO Campus Ambassador banner" class="w-full h-full object-cover rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/jcrmSbUi0DIsPpmbxT9lv1aCfz9mGlsJ08e7HhraFf5SBRLnA.jpg" width="300" style="width: 300px;height:200px"/>
            <span class="absolute bottom-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
            NEWS
            </span>
            </div>
            </div>
            <!-- berita ketiga -->
            <div class="flex flex-col md:flex-row bg-gray-800 p-4 rounded-lg">
            <div class="flex-1">
            <a href=""><h2 class="text-xl font-bold mb-2">
            Inflection AI dan Intel Luncurkan Sistem Enterprise AI Berbasis Gaudi 3
            </h2></a>
            <p class="text-gray-400 mb-4">
            Inflection AI untuk enterprise juga manfaatkan teknologi RLHF agar AI bisa terus...
            </p>
            <div class="flex items-center text-gray-400 text-sm">
            <img alt="Profile picture of Prasetyo Herfianto" class="w-8 h-8 rounded-full mr-2" height="32" src="<?= base_url('css/img/OPPO-Campus.jpg')?>" width="32"/>
            <span>
                Christopher Louis
            </span>
            <span class="mx-2">
                |
            </span>
            <span>
                11 October 2024 08:30
            </span>
            </div>
            </div>
            <div class="flex-shrink-0 md:ml-4 mt-4 md:mt-0 relative">
            <img alt="Image of OPPO Campus Ambassador banner" class="w-full h-full object-cover rounded-lg" height="200" src="<?= base_url('css/img/Inflection-AI.jpeg')?>" width="300" style="width: 300px;height:200px"/>
            <span class="absolute bottom-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
            NEWS
            </span>
            </div>
            </div>
            <!-- berita keempat -->
            <div class="flex flex-col md:flex-row bg-gray-800 p-4 rounded-lg">
            <div class="flex-1">
            <a href=""><h2 class="text-xl font-bold mb-2">
            Alasan TV Samsung Menjadi Pusat Ekosistem di Rumah, Dari Aksesibilitas Hingga Kenyamanan
            </h2></a>
            <p class="text-gray-400 mb-4">
            TV Samsung terbaru menawarkan pengalaman menonton imersif, sekaligus sebagai pusat ekosistem rumah...
            </p>
            <div class="flex items-center text-gray-400 text-sm">
            <img alt="Profile picture of Prasetyo Herfianto" class="w-8 h-8 rounded-full mr-2" height="32" src="<?= base_url('css/img/OPPO-Campus.jpg')?>" width="32"/>
            <span>
                Prasetyo Herfianto
            </span>
            <span class="mx-2">
                |
            </span>
            <span>
                10 October 2024 21:09
            </span>
            </div>
            </div>
            <div class="flex-shrink-0 md:ml-4 mt-4 md:mt-0 relative">
            <img alt="Image of OPPO Campus Ambassador banner" class="w-full h-full object-cover rounded-lg" height="200" src="<?= base_url('css/img/Samsung-Smart-TV.jpg')?>" width="300" style="width: 300px;height:200px"/>
            <span class="absolute bottom-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
            SMART TV
            </span>
            </div>
            </div>
        </div>
    </div>
  </section>

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
 </body>
</html>