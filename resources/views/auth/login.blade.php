<x-app-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-b from-white to-blue-100 text-gray-800 px-6">
        <!-- Logo -->
        <a href="/" ><div class="mb-6 text-center">
            <img src="https://smkn8jakarta.sch.id/wp-content/uploads/2019/12/SMK-N-8-JAKARTA.png" alt="Logo SMKN 8 Jakarta" class="w-20 h-20 mx-auto">
            <h1 class="text-2xl font-bold text-blue-700 mt-2">Administrator</h1>
        </div></a>

        <!-- Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Login Form -->
        <form method="POST" action="{{ route('adminprcs') }}" class="w-full max-w-md bg-white/80 border border-blue-200 p-8 rounded-xl shadow-xl backdrop-blur-sm">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-blue-700" />
                <x-text-input id="email" class="block mt-1 w-full border-blue-300 focus:ring-blue-500 focus:border-blue-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-blue-700" />
                <x-text-input id="password" class="block mt-1 w-full border-blue-300 focus:ring-blue-500 focus:border-blue-500" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-4">
    <x-input-label for="role" :value="__('Role')" class="text-blue-700" />
    <select id="role" name="role" required
        class="block mt-1 w-full border-blue-300 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm">
        <option value="guru">Guru</option>
        <option value="siswa">Siswa</option>
        <option value="admin">Admin</option>
              </select>
             <x-input-error :messages="$errors->get('role')" class="mt-2" />
          </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                    <a class="text-sm text-blue-600 hover:underline" href="{{ route('password-reset') }}">
                        {{ __('Forgot your password?') }}
                    </a>

                <x-primary-button class="ml-3 bg-blue-700 hover:bg-blue-800">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
