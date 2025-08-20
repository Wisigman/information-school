<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 8 Jakarta | Sistem Absensi & Eskul</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-10 w-auto" src="https://smkn8jakarta.sch.id/wp-content/uploads/2019/12/SMK-N-8-JAKARTA.png" alt="Logo SMKN 8 Jakarta">
                        <span class="ml-2 text-xl font-bold text-blue-800">SMKN 8 JAKARTA</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Beranda
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Absensi
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Eskul
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Pengumuman
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-all">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </button>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="hidden sm:hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="bg-blue-50 border-blue-500 text-blue-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Beranda</a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Absensi</a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Eskul</a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Pengumuman</a>
                <div class="mt-4 pl-3 pr-4 py-2">
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-all">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-gradient text-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    Sistem Absensi & Ekstrakurikuler
                </h1>
                <p class="mt-6 max-w-lg mx-auto text-xl">
                    Selamat datang di portal digital SMKN 8 Jakarta untuk manajemen absensi dan kegiatan ekstrakurikuler
                </p>
                <div class="mt-10 flex justify-center space-x-4">
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-blue-700 bg-white hover:bg-blue-50">
                        <i class="fas fa-calendar-check mr-2"></i> Absensi Sekarang
                    </a>
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-800 bg-opacity-80 hover:bg-opacity-100">
                        <i class="fas fa-running mr-2"></i> Daftar Eskul
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Fitur Utama</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Layanan Digital SMKN 8 Jakarta
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Sistem terintegrasi untuk memudahkan proses administrasi sekolah
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm card-hover transition-all">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i class="fas fa-fingerprint text-xl"></i>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">Absensi Digital</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Sistem absensi berbasis QR Code dengan verifikasi wajah untuk keamanan dan akurasi data.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm card-hover transition-all">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">Manajemen Eskul</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Pendaftaran, pengelolaan, dan pelaporan kegiatan ekstrakurikuler secara online.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm card-hover transition-all">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-500 text-white">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">Analisis Data</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Laporan statistik kehadiran dan prestasi eskul dalam bentuk dashboard interaktif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Access Section -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Akses Cepat</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#" class="bg-white p-6 rounded-lg shadow-sm text-center card-hover transition-all">
                    <div class="mx-auto h-12 w-12 text-blue-600">
                        <i class="fas fa-qrcode text-3xl"></i>
                    </div>
                    <h3 class="mt-4 font-medium text-gray-900">Scan Absen</h3>
                </a>
                <a href="#" class="bg-white p-6 rounded-lg shadow-sm text-center card-hover transition-all">
                    <div class="mx-auto h-12 w-12 text-green-600">
                        <i class="fas fa-clipboard-list text-3xl"></i>
                    </div>
                    <h3 class="mt-4 font-medium text-gray-900">Daftar Eskul</h3>
                </a>
                <a href="#" class="bg-white p-6 rounded-lg shadow-sm text-center card-hover transition-all">
                    <div class="mx-auto h-12 w-12 text-yellow-600">
                        <i class="fas fa-calendar-alt text-3xl"></i>
                    </div>
                    <h3 class="mt-4 font-medium text-gray-900">Jadwal</h3>
                </a>
                <a href="#" class="bg-white p-6 rounded-lg shadow-sm text-center card-hover transition-all">
                    <div class="mx-auto h-12 w-12 text-red-600">
                        <i class="fas fa-bullhorn text-3xl"></i>
                    </div>
                    <h3 class="mt-4 font-medium text-gray-900">Pengumuman</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- Announcement Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Pengumuman Terbaru
                    </h2>
                </div>
                <div class="mt-5 flex lg:mt-0 lg:ml-4">
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-list mr-2"></i> Lihat Semua
                    </a>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Announcement 1 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-blue-500 rounded-md p-2">
                                <i class="fas fa-info-circle text-white"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Pembukaan Pendaftaran Eskul</h3>
                                <p class="mt-1 text-sm text-gray-500">12 Juni 2023</p>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-gray-600">
                            Pendaftaran ekstrakurikuler semester genap tahun ajaran 2023/2024 dibuka mulai tanggal 15 Juni 2023.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-500">
                                Baca selengkapnya <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Announcement 2 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-500 rounded-md p-2">
                                <i class="fas fa-calendar-check text-white"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Perubahan Sistem Absensi</h3>
                                <p class="mt-1 text-sm text-gray-500">5 Juni 2023</p>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-gray-600">
                            Mulai 1 Juli 2023, absensi akan menggunakan sistem QR Code dengan verifikasi wajah.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-500">
                                Baca selengkapnya <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Announcement 3 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-purple-500 rounded-md p-2">
                                <i class="fas fa-trophy text-white"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Prestasi Eskul Basket</h3>
                                <p class="mt-1 text-sm text-gray-500">28 Mei 2023</p>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-gray-600">
                            Tim basket SMKN 8 Jakarta meraih juara 2 dalam kompetisi antar sekolah se-Jabodetabek.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-500">
                                Baca selengkapnya <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">SMKN 8 Jakarta</h3>
                    <p class="text-gray-300 text-sm">
                        Jl. Pejaten Raya Pejaten Barat Pasar Minggu Jakarta Selatan 12510
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm">Beranda</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm">Absensi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm">Eskul</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm">Pengumuman</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-300 text-sm"><i class="fas fa-phone-alt mr-2"></i> +6221-7996493</li>
                        <li class="flex items-center text-gray-300 text-sm"><i class="fas fa-envelope mr-2"></i> info@smkn8jakarta.sch.id</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Sosial Media</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/smkn8jktofficial" class="text-gray-300 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com/smkn8jkt" class="text-gray-300 hover:text-white">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/delapanjkt" class="text-gray-300 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@Smkn8jkt" class="text-gray-300 hover:text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-700">
                <p class="text-gray-300 text-sm text-center">
                    &copy; 2023 SMKN 8 Jakarta. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>