<x-app-layout>
    <div x-data="{ showForm: 'dashboard' }" class="flex min-h-screen bg-gradient-to-br from-white to-blue-100">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md p-6 space-y-4">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Menu Admin</h2>
            <nav class="flex flex-col space-y-2">
                <button
                    @click="showForm = 'dashboard'"
                    class="px-4 py-2 rounded-md bg-blue-100 hover:bg-blue-200 text-blue-800 font-semibold"
                >
                    Dashboard
                </button>

                @if (Auth::user()->role == 'admin')
                <button
                    @click="showForm = 'tambahUser'"
                    class="px-4 py-2 rounded-md bg-green-100 hover:bg-green-200 text-green-800 font-semibold"
                >
                    Tambah User
                </button>

                <button
                    @click="showForm = 'lihatGuru'"
                    class="px-4 py-2 rounded-md bg-yellow-100 hover:bg-yellow-200 text-yellow-800 font-semibold"
                >
                    Lihat Daftar Guru
                </button>
                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full px-4 py-2 bg-red-100 hover:bg-red-200 text-red-800 font-semibold rounded-md">
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10 space-y-6">

            <!-- Dashboard Welcome -->
            <div x-show="showForm === 'dashboard'" class="p-4">
                <h1 class="text-2xl font-bold text-gray-800">Selamat datang, {{ Auth::user()->name }}!</h1>
                <p class="mt-2 text-gray-600">Silakan pilih menu di sebelah kiri.</p>
            </div>

            <!-- Tambah User Form -->
            <div x-show="showForm === 'tambahUser'" x-transition class="max-w-xl bg-white p-8 rounded-xl shadow">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 class="text-2xl font-bold mb-6 text-gray-800">Tambah User Baru</h1>

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Role -->
                    <div class="mt-4">
                        <x-input-label for="role" :value="__('Role')" />
                        <select id="role" name="role" required
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="admin">Admin</option>
                            <option value="guru">Guru</option>
                            <option value="siswa">Siswa</option>
                        </select>
                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                            required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Submit -->
                    <div class="flex items-center justify-end mt-6">
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

          <!-- Daftar Guru dalam Bentuk Card -->
<div x-show="showForm === 'lihatGuru'" x-transition class="bg-white p-6 rounded-xl shadow max-w-6xl">
    <h2 class="text-xl font-bold mb-6 text-gray-800">Daftar Guru</h2>

    @php
        $gurus = \App\Models\User::where('role', 'guru')->get();
    @endphp

    @if ($gurus->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($gurus as $guru)
                <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 shadow hover:shadow-lg transition">
                    <div class="text-lg font-semibold text-gray-800">{{ $guru->name }}</div>
                    <div class="text-sm text-gray-600">{{ $guru->email }}</div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-600">Belum ada guru yang terdaftar.</p>
    @endif
</div>

        </main>
    </div>
</x-app-layout>
