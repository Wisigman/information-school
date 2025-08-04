<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-100 via-white to-sky-200 flex items-center justify-center px-4">

  <div class="bg-white shadow-2xl rounded-2xl w-full max-w-2xl p-8 space-y-6">
    <h1 class="text-3xl font-semibold text-gray-800 text-center">Edit Pengguna: 
      <span class="text-blue-600">{{ request()->query('name') }}</span>
    </h1>

    <!-- Alert Sukses -->
    <div id="success-alert" class="hidden px-4 py-3 rounded-md bg-green-100 text-green-800 border border-green-300 text-center">
      ✅ Data berhasil diperbarui! Mengalihkan ke dashboard...
    </div>

    <!-- Form Edit -->
    <form id="edit-user-form" method="POST" action="{{ route('user.update') }}" class="space-y-4">
      @csrf
      <input type="hidden" name="id" value="{{ request()->query('id') }}">

      <!-- Nama -->
      <div>
        <label for="name" class="block text-sm font-semibold text-gray-600 mb-1">Nama Lengkap</label>
        <input type="text" id="name" name="name"
          value="{{ old('name', request()->query('name')) }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
          required autofocus>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-semibold text-gray-600 mb-1">Email</label>
        <input type="email" id="email" name="email"
          value="{{ old('email', request()->query('email')) }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
          required>
      </div>

      <!-- Role -->
      @php $role = old('role', request()->query('role')); @endphp
      <div>
        <label for="role" class="block text-sm font-semibold text-gray-600 mb-1">Role</label>
        <select id="role" name="role"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
          onchange="toggleCabangEskul(this.value)" required>
          <option value="">Pilih Role</option>
          <option value="admin" {{ $role == 'admin' ? 'selected' : '' }}>Admin</option>
          <option value="guru" {{ $role == 'guru' ? 'selected' : '' }}>Guru</option>
          <option value="eskul" {{ $role == 'eskul' ? 'selected' : '' }}>Pelatih Ekstrakurikuler</option>
        </select>
      </div>

      <!-- Cabang Eskul -->
      @php
        $cabangList = ['Futsal', 'Basket', 'Pramuka', 'Paskibra'];
        $selectedCabang = old('cabang_eskul', request()->query('cabang_eskul'));
      @endphp
      <div id="cabang-eskul-wrapper" class="transition-all duration-300" style="display: {{ $role === 'eskul' ? 'block' : 'none' }}">
        <label for="cabang_eskul" class="block text-sm font-semibold text-gray-600 mb-1">Cabang Eskul</label>
        <select id="cabang_eskul" name="cabang_eskul"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400">
          <option value="">Pilih Cabang</option>
          @foreach ($cabangList as $cabang)
            <option value="{{ $cabang }}" {{ $selectedCabang === $cabang ? 'selected' : '' }}>
              {{ $cabang }}
            </option>
          @endforeach
        </select>
      </div>

      <!-- Tombol -->
      <div class="flex justify-between items-center pt-4">
        <a href="/dashboard"
          class="text-sm px-4 py-2 rounded-md bg-gray-200 hover:bg-gray-300 text-gray-700">
          ← Kembali
        </a>
        <button type="submit"
          class="text-sm px-5 py-2 rounded-md bg-blue-600 hover:bg-blue-700 text-white transition">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>

  <script>
    function toggleCabangEskul(role) {
      const cabangDiv = document.getElementById('cabang-eskul-wrapper');
      cabangDiv.style.display = role === 'eskul' ? 'block' : 'none';
    }

    document.addEventListener('DOMContentLoaded', () => {
      toggleCabangEskul(document.getElementById('role').value);
    });

    document.getElementById('edit-user-form').addEventListener('submit', function (e) {
      e.preventDefault();
      const form = e.target;
      const formData = new FormData(form);
      const actionUrl = form.getAttribute('action');
      const successAlert = document.getElementById('success-alert');

      fetch(actionUrl, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
      })
      .then(response => {
        if (!response.ok) throw new Error('Gagal menyimpan data');
        return response.json();
      })
      .then(data => {
        successAlert.classList.remove('hidden');
        setTimeout(() => {
          window.location.href = '/dashboard';
        }, 2000);
      })
      .catch(error => {
        alert('❌ Gagal memperbarui data: ' + error.message);
      });
    });
  </script>
</body>
</html>
