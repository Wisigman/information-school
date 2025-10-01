@extends('layouts.app')

@section('title', 'Tentang Kami - SMKN 8 Jakarta')

@section('content')
  <!-- About Section -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-blue-800 mb-10">Tentang Kami</h2>

      <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-8">
        <p class="text-gray-700 leading-relaxed mb-6">
          Website ini dibuat sebagai bagian dari proyek pembelajaran sekaligus media informasi resmi 
          SMKN 8 Jakarta. Kami sebagai tim pengembang berupaya menghadirkan tampilan yang modern, 
          mudah diakses, serta menyajikan informasi sekolah dengan lengkap.
        </p>

        <p class="text-gray-700 leading-relaxed mb-6">
          Dalam pembuatan website ini, kami menggunakan <span class="font-semibold">Laravel</span> 
          sebagai backend framework dan <span class="font-semibold">TailwindCSS</span> untuk styling. 
          Tujuan kami adalah memberikan pengalaman pengguna yang cepat, responsif, dan menarik, baik 
          untuk siswa, guru, maupun masyarakat umum.
        </p>

        <div class="mt-8">
          <h3 class="text-xl font-semibold text-blue-700 mb-3">Tim Pengembang</h3>
          <ul class="space-y-3 text-gray-700">
            <li>👨‍💻 Gagah R. – Frontend Developer</li>
            <li>🎨 Anggota Tim – UI/UX Designer</li>
            <li>🛠️ Anggota Tim – Backend Developer</li>
          </ul>
        </div>

        <div class="mt-10 text-center">
          <p class="text-gray-600">Dikembangkan dengan ❤️ oleh Tim SISKUL</p>
        </div>
      </div>
    </div>
  </section>
@endsection