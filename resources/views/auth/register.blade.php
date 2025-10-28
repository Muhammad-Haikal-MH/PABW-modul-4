@extends('layouts.layout-masuk')

@section('titlePages', 'Register')

@section('content')
<div class="gap-10 overflow-hidden flex flex-col md:flex-row w-full max-w-5xl">
    <!-- Gambar (kiri) -->
        <div class="md:w-1/2 w-full flex items-center justify-center bg-blue-200 p-6">
            <img src="../images/bglogin.png" alt="registrasi Image" class="w-auto h-auto max-w-[300px] md:max-w-md ">
        </div>

        <div class="md:w-[420px] w-80 mx-auto p-8 bg-blue-300 rounded-lg border-2 border-blue-400">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1 class="text-4xl font-bold text-center mb-6">Register</h1>

                {{-- Full Name --}}
                <div class="relative mb-10">
                    <input type="text" name="name" id="name"
                        value="{{ old('name') }}"
                        required autocomplete="name" placeholder="Username"
                        class="w-full h-10 px-2  border-black border-b-2 bg-transparent outline-none placeholder:text-gray-500"
                    >
                    <i class='bx bxs-user absolute top-1/2 right-4 transform -translate-y-1/2 text-lg'></i>
        
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="relative mb-10">
                    <input type="email" name="email" id="email"  placeholder="Email"
                        value="{{ old('email') }}"
                        required autocomplete="email"
                        class="w-full h-10 px-2 border-b-2 border-black bg-transparent outline-none placeholder:text-gray-500">
                        <i class='bx bxs-envelope absolute top-1/2 right-4 transform -translate-y-1/2 text-lg'></i>
            
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                {{-- Password --}}
                <div class="relative mb-10">
                    <input type="password" name="password" id="password"  placeholder="Password"
                        required autocomplete="new-password"
                        class="w-full h-10 px-2 border-b-2 border-black bg-transparent outline-none placeholder:text-gray-500">
            
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                {{-- Confirm Password --}}
                <div class="relative mb-10">
                    <input type="password" name="password_confirmation" id="password_confirmation"  placeholder="Confirm Password"
                        required autocomplete="new-password"
                        class="w-full h-10 px-2 border-b-2 border-black bg-transparent outline-none placeholder:text-gray-500">
                        
                        @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="flex gap-4">
                    <button type="submit"
                        class="w-full h-10 bg-blue-500  font-semibold rounded-2xl shadow hover:bg-blue-600"
                    >
                        Register
                     </button>
                    
                </div>

                <div class="mt-6 text-center text-sm">
                    <p>
                        udah punya akun?
                        <a href="{{ route('login') }}" class="text-sm hover:underline">Login</a>
                    </p>
                </div>
        </div>


        </form>
</div>
@endsection


{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
