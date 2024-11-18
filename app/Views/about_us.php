<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Gadget Glimpse
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-black">
    <header class="flex justify-between items-center p-4 border-b border-gray-200">
        <div class="flex items-center space-x-4">
            <i class="fas fa-circle text-red-500">
            </i>
            <i class="fas fa-circle text-yellow-500">
            </i>
            <i class="fas fa-circle text-green-500">
            </i>
        </div>
        <div class="text-lg font-bold">
            Gadget Glimpse
        </div>
        <div class="bg-blue-600 text-white px-4 py-2 rounded-full">
            <i class="fas fa-circle">
            </i>
            Technology
        </div>
    </header>
    <section class="flex flex-col lg:flex-row items-center justify-center bg-blue-600 text-white p-8">
        <div class="text-center lg:text-left lg:w-1/2">
            <h1 class="text-5xl font-bold">
                Gadget Glimpse
            </h1>
            <h2 class="text-2xl font-semibold mt-4">
                Review and News Around Technology
            </h2>
            <p class="mt-4 text-lg">
                Kelompok 1
            </p>
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0">
            <img alt="Technology gadgets and news" class="w-full h-64 object-cover rounded-lg shadow-lg" src="<?= base_url('css/img/logo.png') ?>" style="object-fit: content;" />
        </div>
    </section>
    <main class="flex flex-col lg:flex-row p-8 space-y-8 lg:space-y-0 lg:space-x-8">
        <div class="w-full lg:w-1/2 flex flex-col space-y-4">
            <div class="relative group">
                <img alt="Latest technology news" class="w-full h-64 object-cover rounded-lg shadow-lg transform transition-transform duration-300 group-hover:scale-105" src="https://storage.googleapis.com/a1aa/image/VIXPpf6uk1UadyJf6FIe94H6HVLWcT45ESzIuOEe5aGsHVIPB.jpg" />
                <div class="absolute inset-0 bg-blue-600 bg-opacity-50 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    View More
                </div>
            </div>
            <div class="relative group">
                <img alt="Review of the latest gadgets" class="w-full h-64 object-cover rounded-lg shadow-lg transform transition-transform duration-300 group-hover:scale-105" src="https://storage.googleapis.com/a1aa/image/TWNex1kZOfsvmkzVWEhXNsKqnt29okLYFUV17RfiaI0zjKknA.jpg" />
                <div class="absolute inset-0 bg-blue-600 bg-opacity-50 flex items-center justify-center text-white font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    View More
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 lg:pl-8">
            <h1 class="text-5xl font-bold">
                About Us
            </h1>
            <h2 class="text-xl font-semibold mt-4">
                GADGET GLIMPSE PRESENTATION
            </h2>
            <p class="mt-4 text-gray-600">
                Gadget Glimpse adalah sumber utama Anda untuk berita terbaru dari dunia teknologi. Kami menyediakan berita terkini, analisis mendalam, dan review perangkat terbaru yang ada saat ini. Tetap terhubung dengan perkembangan teknologi terbaru bersama kami.
            </p>
            <div class="mt-8">
                <h3 class="text-lg font-semibold">
                    PROJECT
                </h3>
                <p class="text-gray-600">
                    Gadget Glimpse adalah proyek yang bertujuan untuk memberikan informasi terkini dan terpercaya tentang teknologi dan perangkat terbaru.
                </p>
            </div>
            <div class="mt-8">
                <h3 class="text-lg font-semibold">
                    FEATURED
                </h3>
                <p class="text-blue-600 font-bold">
                    MUHAMMAD NUR SYAHPUTRA &amp; MUTHIA ZULFA
                </p>
            </div>
        </div>
    </main>
    <footer class="flex justify-end p-4">
        <i class="fas fa-bars text-2xl">
        </i>
    </footer>
</body>

</html>