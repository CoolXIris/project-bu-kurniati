<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback List</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-900 text-gray-100">
    <div class="container mx-auto p-6">
        <!-- Header Section -->
        <h1 class="text-3xl font-bold text-white-800 mb-6">Daftar Komentar</h1>

        <!-- Grafik Komentar per Hari -->
        <div class="bg-gray-800 p-6 rounded-md shadow-md mb-6">
            <h2 class="text-xl font-semibold text-white mb-4">Jumlah Komentar per Hari</h2>
            <canvas id="komentarChart" class="w-full h-64"></canvas>
        </div>

        <!-- Daftar Komentar -->
        <div class="bg-gray-800 p-6 rounded-md shadow-md">
            <h2 class="text-xl font-semibold text-white mb-4">Komentar Terbaru</h2>
            <div class="divide-y divide-gray-700">
                <?php if (!empty($feedbacks)) : ?>
                    <?php foreach ($feedbacks as $feedback) : ?>
                        <div class="py-4">
                            <p class="text-white-300"><strong><?= $feedback['nama'] ?: 'Anonim'; ?>:</strong> <?= $feedback['komentar']; ?></p>
                            <p class="text-sm text-white-500">Tanggal: <?= $feedback['created_at']; ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="text-gray-500">Belum ada komentar.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Script untuk Grafik -->
    <script>
        // Data Grafik (dikirim dari PHP)
        const komentarPerHari = {
            labels: <?= json_encode(array_column($chartData, 'date')); ?>, // Tanggal
            datasets: [{
                label: 'Jumlah Komentar',
                data: <?= json_encode(array_column($chartData, 'count')); ?>, // Jumlah komentar
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };

        // Konfigurasi Grafik
        const config = {
            type: 'bar',
            data: komentarPerHari,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Jumlah Komentar per Hari'
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Render Grafik
        const ctx = document.getElementById('komentarChart').getContext('2d');
        new Chart(ctx, config);
    </script>
    <div>
        <canvas id="reactionChart" style="max-width: 600px; margin: 20px auto;"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        fetch('/reaction/stats')
            .then(response => response.json())
            .then(data => {
                const ctx = document.getElementById('reactionChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.labels, // Nama reaksi
                        datasets: [{
                            label: 'Jumlah Reaksi',
                            data: data.counts, // Jumlah tiap reaksi
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error:', error));
    </script>

</body>

</html>