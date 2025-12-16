<x-guest-layout>
    <div class="text-center mb-8">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-blue-600 rounded-2xl mb-4 shadow-xl">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
            </svg>
        </div>
        <h2 class="text-3xl font-black text-blue-900 mb-2">Selamat Datang!</h2>
        <p class="text-blue-700 font-semibold text-base">Masuk untuk menggunakan hak pilih Anda</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-blue-900 font-bold text-sm" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                    </svg>
                </div>
                <x-text-input id="email" class="block w-full pl-11 pr-4 py-3.5 border-2 border-blue-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 rounded-xl text-gray-900 font-medium" type="email" name="email" :value="old('email')" placeholder="nama@email.com" required autofocus autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-blue-900 font-bold text-sm" />
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <x-text-input id="password" class="block w-full pl-11 pr-4 py-3.5 border-2 border-blue-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 rounded-xl text-gray-900 font-medium" type="password" name="password" placeholder="••••••••" required autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded-md border-blue-300 text-blue-600 shadow-sm focus:ring-blue-500 w-4 h-4" name="remember">
                <span class="ml-2 text-sm text-blue-900 font-semibold">Ingat Saya</span>
            </label>
            
            @if (Route::has('password.request'))
                <a class="text-sm text-blue-600 hover:text-blue-800 font-bold hover:underline" href="{{ route('password.request') }}">
                    Lupa Password?
                </a>
            @endif
        </div>

        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 text-white font-black py-4 px-6 rounded-xl shadow-2xl transform hover:scale-[1.02] transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-blue-300 flex items-center justify-center text-lg group">
            <svg class="w-7 h-7 mr-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
            </svg>
            MASUK SEKARANG
        </button>
        
        <div class="text-center mt-8">
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t-2 border-blue-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-blue-600 font-bold">ATAU</span>
                </div>
            </div>
            <div class="mt-6">
                <span class="text-blue-900 font-semibold">Belum punya akun? </span>
                <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 font-black hover:underline">
                    Daftar Sekarang →
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
