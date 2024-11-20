<html>

<head>
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

<body class="flex flex-col items-center justify-center min-h-screen pt-16">
    <h1 class="text-4xl md:text-6xl font-bold text-blue-900 mb-5">
        Our Group
    </h1>
    <div class="flex flex-col items-center justify-center w-full h-full" style="padding: 40px;padding-top:500px;padding-bottom:100px">
        <!-- Person 1 -->
        <div class="flex flex-col md:flex-row items-center justify-center w-full p-8" style="margin-bottom: 100px;">
            <div class="flex flex-col items-start justify-center w-full md:w-1/2 p-8">
                <h1 class="text-4xl md:text-6xl font-bold text-blue-900">
                    Hello
                </h1>
                <h2 class="text-4xl md:text-6xl font-bold text-blue-900">
                    I'm Muhammad Nur Syahputra
                </h2>
                <p class="text-gray-600 mt-4 text-lg md:text-xl">
                    I am a student from the Information Management department, currently in my 5th semester, and I created this website as part of the final project for one of the courses I am taking. Nice to meet you all! You can contact me via email by clicking the button below.
                </p>
                <button id="contactButton" class="mt-6 px-6 py-3 bg-blue-600 text-white text-lg md:text-xl rounded-full shadow-md hover:bg-blue-700">
                    Contact me
                </button>
            </div>
            <div class="flex items-center justify-center w-full md:w-1/2">
                <img alt="Portrait of Aditya, a freelance UI designer, standing in front of a green shutter wearing a jacket and backpack" class="w-48 h-48 md:w-96 md:h-96 rounded-full shadow-lg" height="384" src="<?= base_url('css/img/foto1.jpg') ?>" width="384" style="object-fit: cover;" />
            </div>
        </div>
        <!-- Person 2 -->
        <div class="flex flex-col md:flex-row-reverse items-center justify-center w-full p-8" style="margin-top: 40px;">
            <div class="flex flex-col items-start justify-center w-full md:w-1/2 p-8">
                <h1 class="text-4xl md:text-6xl font-bold text-blue-900">
                    Hello
                </h1>
                <h2 class="text-4xl md:text-6xl font-bold text-blue-900">
                    I'm Muthia Zulfa
                </h2>
                <p class="text-gray-600 mt-4 text-lg md:text-xl">
                    I am a student from the Information Management department, currently in my 5th semester, and I created this website as part of the final project for one of the courses I am taking. Nice to meet you all! You can contact me via email by clicking the button below.
                </p>
                <button id="contactButton" class="mt-6 px-6 py-3 bg-blue-600 text-white text-lg md:text-xl rounded-full shadow-md hover:bg-blue-700">
                    Contact me
                </button>
            </div>
            <div class="flex items-center justify-center w-full md:w-1/2">
                <img alt="Portrait of another person, a freelance developer, standing in front of a brick wall wearing a casual shirt" class="w-48 h-48 md:w-96 md:h-96 rounded-full shadow-lg" height="384" src="<?= base_url('css/img/foto3.jpeg') ?>" width="384" style="object-fit: cover;" />
            </div>
        </div>
    </div>

    <script>
        // Menambahkan event listener untuk tombol "Contact me"
        document.getElementById("contactButton").addEventListener("click", function() {
            // Membuka halaman Gmail untuk mengirim email
            window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=mnursyahputra0@gmail.com";
        });
    </script>
</body>

</html>