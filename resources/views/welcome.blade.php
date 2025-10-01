@extends('layouts.app')

@section('title', 'Beranda - SISKUL 8')

@section('content')

  <!-- Fullscreen Image Carousel -->
  <section class="relative w-full h-screen overflow-hidden">
    <div class="relative w-full h-full">
      <img 
        id="carouselImage" 
        src="/storage/slide/slide1.png" 
        class="absolute inset-0 w-full h-full object-cover" 
        alt="Carousel Image">
      <div class="absolute inset-0 flex flex-col justify-center items-center bg-black/40 text-center text-white px-4">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow">Selamat Datang di Website Siskul Delapan</h2>
        <p class="text-lg md:text-xl max-w-2xl mx-auto drop-shadow">Temukan informasi terbaru seputar kegiatan eskul, absensi guru maupun absensi siswa SMKN 8 Jakarta.</p>
        <button class="mt-6 px-6 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition shadow" onclick="window.location.href='/login'">Log in into your Dashboard</button>
      </div>
      <!-- tombol navigasi -->
      {{-- <button onclick="changeSlide(-1)" class="absolute left-4 top-1/2 -translate-y-1/2 bg-blue-600 text-white px-3 py-2 rounded-full shadow hover:bg-blue-800 z-10">&#8592;</button>
      <button onclick="changeSlide(1)" class="absolute right-4 top-1/2 -translate-y-1/2 bg-blue-600 text-white px-3 py-2 rounded-full shadow hover:bg-blue-800 z-10">&#8594;</button> --}}
    </div>
  </section>

  <!-- Team -->
  <section id="team" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
      <h3 class="text-3xl font-bold text-blue-800 mb-10">Team</h3>
      <div class="grid grid-cols-2 md:grid-cols-6 gap-8">
        <div class="flex flex-col items-center">
          <img src="/storage/team/akmal.jpg" class="mb-5 w-40 h-40 rounded-full object-cover border border-gray-300 shadow" alt="Team Member 1">
          <p class="font-semibold">Muhammad Akmal Fadli</p>
          <small>Backend Programmer</small>
        </div>
        <div class="flex flex-col items-center">
          <img src="/storage/team/azra.jpg" class="mb-5 w-40 h-40 rounded-full object-cover border border-gray-300 shadow" alt="Team Member 2">
          <p class="font-semibold">Azmar Syifa Azra</p>
          <small>UI/UX</small>
        </div>
        <div class="flex flex-col items-center">
          <img src="/storage/team/azzam.jpg" class="mb-5 w-40 h-40 rounded-full object-cover border border-gray-300 shadow" alt="Team Member 3">
          <p class="font-semibold">Rizki Khoirul Azzam</p>
          <small>UI/UX</small>
        </div>
        <div class="flex flex-col items-center">
          <img src="/storage/team/omar.jpg" class="mb-5 w-40 h-40 rounded-full object-cover border border-gray-300 shadow" alt="Team Member 4">
          <p class="font-semibold">Moeamar Hamzah Omar Ollie</p>
          <small>UI/UX</small>
        </div>
        <div class="flex flex-col items-center">
          <img src="/storage/team/gagah.jpg" class="mb-5 w-40 h-40 rounded-full object-cover border border-gray-300 shadow" alt="Team Member 5">
          <p class="font-semibold">Wisanggeni Gagah Ramadhan</p>
          <small>Frontend Programmer</small>
        </div>
        <div class="flex flex-col items-center">
          <img src="/storage/team/yazid.jpg" class="mb-5 w-40 h-40 rounded-full object-cover border border-gray-300 shadow" alt="Team Member 6">
          <p class="font-semibold">Yazid Alfa</p>
          <small>Data Analis</small>
        </div>
      </div>
    </div>
  </section>

  <!-- Kegiatan -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">

        <div class="flex flex-col lg:flex-row items-center lg:space-x-12">
            
            <a href="#" class="w-full lg:w-1/3 p-4 bg-white shadow-xl rounded-lg transform transition duration-300 hover:scale-[1.02]">
                <img class="w-full h-auto rounded-md" 
                     src="https://smkn8jakarta.sch.id/wp-content/uploads/2019/12/SMK-N-8-JAKARTA.png" 
                     alt="HARI KESAKTIAN PANCASILA" />
            </a>
            
            <div class="w-full lg:w-2/3 mt-6 lg:mt-0 lg:text-left">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">HARI KESAKTIAN PANCASILA</h2>
                <span class="text-lg text-gray-600 leading-relaxed">
                    1 Oktober, Selamat memperingati Hari Kesaktian Pancasila! mari kita jaga persatuan dan semangat kebangsaan
                </span>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row items-center lg:space-x-12">
            
            <div class="w-full lg:w-2/3 mt-6 lg:mt-0 lg:text-right order-2 lg:order-1">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">HUT SMKN 8 Ke-60</h2>
                <span class="text-lg text-gray-600 leading-relaxed">
                    30 November, Selamat memperingati HUT SMKN 8 Jakarta ke-60.
                </span>
            </div>

            <a href="#" class="w-full lg:w-1/3 p-4 bg-white shadow-xl rounded-lg order-1 lg:order-2 transform transition duration-300 hover:scale-[1.02]">
                <img class="w-full h-auto rounded-md" 
                     src="https://smkn8jakarta.sch.id/wp-content/uploads/2019/12/SMK-N-8-JAKARTA.png" 
                     alt="HUT SMKN 8 Ke-60" />
            </a>
        </div>

    </div>
</section>

<!-- Info 4 Panel -->
<section class="py-10 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
            
            <a href="/juara" class="p-4 sm:p-6 text-center bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mx-auto mb-2 flex items-center justify-center border-blue-500 rounded-lg text-blue-500 text-2xl">
                    <i class="fas fa-trophy text-3xl"></i>
                </div>
                <span class="text-sm font-semibold text-gray-700">Kejuaraan</span>
            </a>
            
            <a href="/eskul" class="p-4 sm:p-6 text-center bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mx-auto mb-2 flex items-center justify-center border-blue-500 rounded-lg text-blue-500 text-2xl">
                    <i class="fa-regular fa-soccer-ball text-3xl"></i>
                </div>
                <span class="text-sm font-semibold text-gray-700">Ekstrakulikuler</span>
            </a>
            
            <a href="/berita" class="p-4 sm:p-6 text-center bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mx-auto mb-2 flex items-center justify-center border-blue-500 rounded-lg text-blue-500 text-2xl">
                    <i class="fa-solid fa-newspaper text-3xl"></i>
                </div>
                <span class="text-sm font-semibold text-gray-700">Berita</span>
            </a>
            
            <a href="/agenda" class="p-4 sm:p-6 text-center bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mx-auto mb-2 flex items-center justify-center border-blue-500 rounded-lg text-blue-500 text-2xl">
                    <i class="fas fa-pencil-square text-3xl"></i>
                </div>
                <span class="text-sm font-semibold text-gray-700">Agenda</span>
            </a>
        </div>
    </div>
</section>

<!-- Kejuaraan -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-800">Kejuaraan</h1>
        </div>

        <div class="lg:flex lg:items-center lg:space-x-12">
            
            <div class="lg:w-1/2 flex justify-center items-center relative mb-10 lg:mb-0">
                <img src="https://www.smandakebumen.sch.id/assets/img/landing/kejuaraan.png" alt="Kejuaraan Illustration" class="max-w-full h-auto">
            </div>

            <div class="lg:w-1/2 flex items-center justify-center relative">
                
                <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100 max-w-sm w-full relative overflow-hidden">
                    <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">
                        <i class="fa fa-eye mr-1"></i> 67,41 rb 
                    </div>
                    <img src="URL_VIDEO_THUMBNAIL" alt="Video Thumbnail" class="w-full h-40 object-cover rounded-lg mb-3">
                    <div class="absolute inset-0 bg-black opacity-20"></div>

                    <p class="text-sm font-semibold text-gray-800 text-center relative z-10 p-2">
                        SMKN 8 JAKARTA GONDOL JUARA ROBOTIK
                    </p>
                </div>

                <button class="absolute left-0 -ml-6 p-2 bg-gray-200 rounded-full shadow-md hover:bg-gray-300 transition-colors z-20">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="absolute right-0 -mr-6 p-2 bg-gray-200 rounded-full shadow-md hover:bg-gray-300 transition-colors z-20">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Ekstra -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-800">Ekstrakurikuler</h1>
        </div>

        <div class="lg:flex lg:items-center lg:space-x-12">
            
            <div class="lg:w-1/2 flex items-center justify-center relative mb-10 lg:mb-0">
                <button class="absolute left-0 -ml-12 p-3 bg-gray-200 rounded-full shadow-md hover:bg-gray-300 transition-colors z-10">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="absolute right-0 -mr-12 p-3 bg-gray-200 rounded-full shadow-md hover:bg-gray-300 transition-colors z-10">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <div class="bg-white p-8 rounded-lg shadow-xl text-center border border-gray-100 max-w-sm w-full">
                    <img src="https://smkn8jakarta.sch.id/wp-content/uploads/2019/12/SMK-N-8-JAKARTA.png" alt="PASKIBRA Logo" class="w-32 h-32 mx-auto mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">PASKIBRA</h2>
                    <p class="text-lg text-gray-600 mb-6">PASKIBRA DELAPAN</p>
                    <a href="#" class="inline-flex items-center justify-center bg-white border-2 border-blue-500 text-blue-500 font-semibold py-3 px-8 rounded-full hover:bg-blue-500 hover:text-white transition duration-300 shadow-md">
                        SELENGKAPNYA
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <div class="lg:w-1/2 flex justify-center items-center mt-10 lg:mt-0">
                <img src="https://www.smandakebumen.sch.id/assets/img/landing/ekstra.png" alt="Ekstra Illustration" class="max-w-full h-auto">
            </div>

        </div>
    </div>
</section>

  <!-- Informasi App -->
  <section id="informasi" class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h3 class="text-3xl font-bold text-blue-800 mb-6">Informasi App</h3>
      <p class="max-w-2xl mx-auto text-gray-700">
        Aplikasi ini dibangun menggunakan <span class="font-semibold">Laravel</span> sebagai backend utama 
        dan menerapkan metode <span class="font-semibold">Waterfall</span> dalam pengembangannya. 
        Metode ini memastikan setiap tahap dari perencanaan, desain, implementasi, hingga pengujian dilakukan secara runtut dan sistematis.
      </p>
    </div>
  </section>
  
  <!-- Visi & Misi -->
  <section id="visi" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
      <h3 class="text-3xl font-bold text-blue-800 mb-6">Visi & Misi</h3>
      <p class="max-w-2xl mx-auto text-gray-700">
        Visi aplikasi ini adalah menghadirkan sistem absensi yang efisien, transparan, dan mudah digunakan.  
        Misi kami adalah mendigitalisasi proses absensi agar lebih cepat, akurat, dan dapat diakses kapan saja.  
        Dengan demikian, guru, siswa, dan sekolah dapat lebih fokus pada kegiatan belajar mengajar tanpa terbebani urusan administrasi manual.
      </p>
    </div>
  </section>

  <!-- Moto -->
  <section id="moto" class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h3 class="text-3xl font-bold text-blue-800 mb-6">Moto</h3>
      <p class="max-w-xl mx-auto text-gray-700 italic">"Menyajikan aplikasi absensi yang tersentralisasi pada digital."</p>
    </div>
  </section>

  <!-- Contact -->
    <section id="contact" class="min-h-screen bg-gray-50 flex items-center justify-center p-8" 
            style="background-image: url('URL_BACKGROUND_SKETCH'); background-size: cover;">
        <div class="max-w-6xl w-full bg-white shadow-xl rounded-lg p-12 lg:p-16 border border-gray-200">
            <div class="lg:flex lg:space-x-12">

                <div class="lg:w-1/2 mb-10 lg:mb-0">
                    <h3 class="text-3xl font-semibold mb-8 text-gray-800">Contact</h3>
                    
                    <form id='kritiksaran' action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        
                        <div class="flex space-x-4 mb-6">
                            <div class="relative w-1/2">
                                <input class="w-full border-b-2 focus:border-blue-700 outline-none p-2 pt-6 peer transition-colors" 
                                    id="name_form" name="nama_kritiksaran" required="" type="text" placeholder=" " />
                                <label for="name_form" class="absolute left-2 top-0 text-sm text-gray-600 transition-all peer-placeholder-shown:text-lg peer-placeholder-shown:top-3 peer-focus:top-0 peer-focus:text-sm peer-focus:text-blue-600">Name</label>
                            </div>
                            <div class="relative w-1/2">
                                <input class="w-full border-b-2 focus:border-blue-700 outline-none p-2 pt-6 peer transition-colors" 
                                    id="email_form" name="email_kritiksaran" required="" type="email" placeholder=" " />
                                <label for="email_form" class="absolute left-2 top-0 text-sm text-gray-600 transition-all peer-placeholder-shown:text-lg peer-placeholder-shown:top-3 peer-focus:top-0 peer-focus:text-sm peer-focus:text-blue-600">E-mail</label>
                            </div>
                        </div>
                        
                        <div class="relative mb-6">
                            <textarea class="w-full border-b-2 focus:border-blue-700 outline-none p-2 pt-6 peer resize-none transition-colors" 
                                    name="pesan_kritiksaran" id="pesan_form" rows="4" required="" type="text" placeholder=" "></textarea>
                            <label for="pesan_form" class="absolute left-2 top-0 text-sm text-gray-600 transition-all peer-placeholder-shown:text-lg peer-placeholder-shown:top-3 peer-focus:top-0 peer-focus:text-sm peer-focus:text-blue-600">Pesan</label>
                            <span class="absolute bottom-2 right-2 text-gray-400"></span> </div>

                        <span class="text-sm text-gray-500 italic mb-6 block">
                            *Anda tidak perlu login untuk mengisi kritik dan saran
                        </span>

                        <div class="flex items-center">
                            <button class="bg-white border-2 border-blue-500 text-blue-500 font-bold py-2 px-8 rounded-full hover:bg-blue-500 hover:text-white transition duration-300 shadow-md" 
                                    type="submit" id="submit">Kirim</button>
                        </div>
                    </form>
                </div>

                <div class="lg:w-1/2">
                    <h3 class="text-3xl font-semibold mb-4 text-gray-800">SMK Negeri 8 Jakarta</h3>
                    
                    <div class="space-y-3 mb-6 text-gray-700">
                        <p class="flex items-center">
                            <i class="fa-solid fa-location-dot text-blue-500 mr-3"></i>
                            Jl. Pejaten Raya, Kompleks Depdikbud, RT.07/RW.06, Pejaten Barat, Jakarta Selatan
                        </p>
                        <p class="flex items-center">
                            <i class="fa fa-phone text-blue-500 mr-3"></i>
                            (021) 7996493
                        </p>
                        <p class="flex items-center">
                            <i class="fa fa-envelope text-blue-500 mr-3"></i>
                            info@smkn8jakarta.sch.id 
                        </p>
                    </div>
                    
                    <div class="w-full h-80 rounded-lg overflow-hidden shadow-lg border border-gray-300">
                        <iframe loading="lazy" title="SMA Negeri 2 Kebumen" 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8915139996384!2d106.83406321419409!3d-6.277991363200373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f23e0287b8e1%3A0x2a98e9f790322749!2sSekolah%20Menengah%20Kejuruan%20Negeri%208%20Jakarta!5e0!3m2!1sid!2sid!4v1576403584132!5m2!1sid!2sid" 
                                width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Script -->
  <script>
    const images = [
       "/storage/slide/slide1.png",
    //   "/storage/slide/slide2.jpg",
    //   "/storage/slide/slide3.jpg"
    ];
    let currentIndex = 0;
    const carouselImage = document.getElementById('carouselImage');

    function changeSlide(direction) {
      currentIndex = (currentIndex + direction + images.length) % images.length;
      carouselImage.src = images[currentIndex];
    }

    // Auto-play setiap 5 detik
    setInterval(() => {
      changeSlide(1);
    }, 5000);

    function toggleMenu() {
      const mobileMenu = document.getElementById('mobileMenu');
      mobileMenu.classList.toggle('hidden');
    }
  </script>
</body>
@endsection
</html>
