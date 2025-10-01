<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" href="https://smkn8jakarta.sch.id/wp-content/uploads/2019/12/SMK-N-8-JAKARTA.png" type="image/png"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Siskul 8 Jakarta</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMDJ86dGNB8Co/8Gtr89M0v+3wGoJ4DNYo3/dJ8S/D3n/6F6T/5+FqVl288gG/8Lw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/src/styles.css" rel="stylesheet">
    <link rel="public/favicon.ico" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white text-gray-800">

  <!-- Topbar -->
  <div class="bg-blue-900 text-white text-xs md:text-sm py-2">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4 space-y-1 md:space-y-0">
      <div>
        <i class="fa fa-map-marker-alt mr-1"></i> Jl. Pejaten Raya, Kompleks Depdikbud, RT.07/RW.06, Pejaten Barat, Jakarta Selatan
      </div>
      <div class="space-x-4">
        <span><i class="fa fa-phone mr-1"></i> (021) 7996493</span>
        <span><i class="fa fa-envelope mr-1"></i> info@smkn8jakarta.sch.id </span>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="bg-blue-700 text-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center space-x-4">
        <a href="/">
          <img src="https://smkn8jakarta.sch.id/wp-content/uploads/2019/12/SMK-N-8-JAKARTA.png" alt="Logo SMKN 8 Jakarta" class="w-10 h-10">
        </a>
        <div class="text-xl md:text-2xl font-bold">Siskul 8 Jakarta</div>
      </div>
      <!-- Mobile Button -->
      <div class="md:hidden">
        <button onclick="toggleMenu()" class="text-white focus:outline-none">
          <i class="fa fa-bars text-xl"></i>
        </button>
      </div>
      <!-- Menu Desktop -->
      <ul id="navMenu" class="hidden md:flex space-x-6 text-sm font-medium">
        <li><a href="#contact" class="hover:text-blue-200"><i class="fa fa-phone"></i> Contact</a></li>
        <li><a href="#informasi" class="hover:text-blue-200"><i class="fa fa-info-circle"></i> Informasi App</a></li>
        <li><a href="#visi" class="hover:text-blue-200"><i class="fa fa-star"></i> Visi & Misi</a></li>
        <li><a href="#moto" class="hover:text-blue-200"><i class="fa fa-quote-left"></i> Moto</a></li>
        <li><a href="#team" class="hover:text-blue-200"><i class="fa fa-users"></i> Team</a></li>
      </ul>
    </div>
    <!-- Menu Mobile -->
    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 absolute bg-blue-700 w-full left-0 top-full">
      <ul class="space-y-2 text-sm font-medium">
        <li><a href="#contact" class="block py-1 text-white hover:text-blue-200">Contact</a></li>
        <li><a href="#informasi" class="block py-1 text-white hover:text-blue-200">Informasi App</a></li>
        <li><a href="#visi" class="block py-1 text-white hover:text-blue-200">Visi & Misi</a></li>
        <li><a href="#moto" class="block py-1 text-white hover:text-blue-200">Moto</a></li>
        <li><a href="#team" class="block py-1 text-white hover:text-blue-200">Team</a></li>
      </ul>
    </div>
  </nav>

  <!-- Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-blue-900 text-white mt-12">
    <div class="container mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Info Sekolah -->
      <div>
        <h3 class="font-bold text-lg mb-3">SMKN 8 Jakarta</h3>
        <p>Jl. Pejaten Raya, Kompleks Depdikbud, RT.07/RW.06, Pejaten Barat, Jakarta Selatan</p>
        <p>Telp: (021) 7996493</p>
        <p>Email: smkn8jakarta@gmail.com</p>
      </div>
      <!-- Navigasi -->
      <div>
        <h3 class="font-bold text-lg mb-3">Navigasi</h3>
        <ul class="space-y-2">
          <li><a href="/" class="hover:underline">Beranda</a></li>
          <li><a href="#visi" class="hover:underline">Visi & Misi</a></li>
          <li><a href="#informasi" class="hover:underline">Informasi</a></li>
          <li><a href="#team" class="hover:underline">Team</a></li>
        </ul>
      </div>
      <!-- Sosial Media -->
      <div>
        <h3 class="font-bold text-lg mb-3">Sosial Media</h3>
        <div class="flex space-x-4">
          <a href="https://www.facebook.com/smkn8jktofficial" target="_blank" title="Facebook">
            <i class="fab fa-facebook text-2xl hover:text-blue-600"></i>
          </a>
          <a href="https://www.instagram.com/delapanjkt" target="_blank" title="Instagram">
            <i class="fab fa-instagram text-2xl hover:text-pink-500"></i>
          </a>
          <a href="mailto:info@smkn8jakarta.sch.id" title="Contact">
            <i class="fa fa-envelope text-2xl hover:text-blue-400"></i>
          </a>
          <a href="https://www.youtube.com/@Smkn8jkt" target="_blank" title="Youtube">
            <i class="fab fa-youtube text-2xl hover:text-red-600"></i>
          </a>
          <a href="https://x.com/smkn8jkt" target="_blank" title="X (Formerly Twitter)">
            <i class="fab fa-x-twitter text-2xl hover:text-black"></i>
          </a>
          <a href="https://wa.me/6285717281174" target="_blank" title="WhatsApp">
            <i class="fab fa-whatsapp text-2xl hover:text-green-500"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="bg-blue-950 text-center py-3 text-sm">© 2025 SMKN 8 Jakarta - All rights reserved.</div>
  </footer>

  <!-- Script -->
  <script>
    function toggleMenu() {
      const mobileMenu = document.getElementById('mobileMenu');
      mobileMenu.classList.toggle('hidden');
    }
  </script>
</body>
</html>