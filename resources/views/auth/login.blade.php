@extends('layouts.layout-masuk')

@section('titlePages', 'Login')

@section('content')
<div class="gap-10 overflow-hidden flex flex-col md:flex-row w-full max-w-5xl">
    <!-- Gambar (kiri) -->
    <div class="md:w-1/2 w-full flex items-center justify-center bg-blue-200 p-6">
        <img src="{{ asset('images/bglogin.png') }}" alt="Login page" class="w-auto h-auto max-w-[300px] md:max-w-md">
    </div>

    <div class="md:w-[420px] w-80 mx-auto p-8 bg-blue-300 rounded-lg border-2 border-blue-400">
        <h1 class="text-4xl font-bold text-center mb-6">Login</h1>

        <form action="{{ route('login') }}" method="POST">
            @csrf

            {{-- Email --}}
            <div class="relative mb-10">
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}"
                    required autocomplete="username"
                    class="w-full h-10 px-2 border-b-2 border-black bg-transparent outline-none placeholder:text-gray-500">
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="relative mb-10">
                <input type="password" name="password" id="password" placeholder="Password"
                    required autocomplete="current-password"
                    class="w-full h-10 px-2 border-0 border-b-2 border-black bg-transparent 
           focus:outline-none focus:ring-0 focus:border-black placeholder:text-gray-500">
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between items-center mb-6 md:mb-10 text-sm">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="mr-2">
                    Remember me
                </label>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-blue-800 hover:underline">Forgot password?</a>
                @endif
            </div>

            <div class="flex gap-4 mb-6 md:mb-10">
                <button type="submit"
                    class="w-full h-10 bg-blue-500 font-semibold rounded-2xl shadow hover:bg-blue-600">
                    Login
                </button>
            </div>

            <div class="text-center text-sm">
                <p>Belum punya akun? 
                    <a href="{{ route('register') }}" class="text-blue-800 hover:underline">Register</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection





{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
